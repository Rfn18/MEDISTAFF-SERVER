<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Allowance;
use App\Models\Attendance;
use App\Models\Deduction;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\PayrollDetail;
use App\Models\Position;
use App\Models\ShiftSchedulesDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PayrollController extends Controller
{
    const OVERTIME_MULTIPLIER = 1.5;

    public function index() {
        $payroll = Payroll::with(['employee', 'payrollDetails', 'paySlips'  ])->paginate(10);
        if ($payroll->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data payroll.', $payroll);
    }

  public function payroll(Request $request) {
    $validate = Validator::make($request->all(), [
        'employee_id'              => 'required|exists:employees,id',
        'month'                    => 'required|integer|min:1|max:12',
        'year'                     => 'required|integer|min:2000|max:2100',
        'base_salary'              => 'sometimes|integer',

        'allowances'               => 'sometimes|array',
        'allowances.*.allowance_id'=> 'required|exists:allowances,id',
        'allowances.*.is_custom'   => 'sometimes|boolean',
        'allowances.*.amount'      => 'required_if:allowances.*.is_custom,true|integer',
        'allowances.*.name'        => 'required_if:allowances.*.is_custom,true|string',

        'deductions'               => 'sometimes|array',
        'deductions.*.deduction_id'=> 'required|exists:deductions,id',
        'deductions.*.is_custom'   => 'sometimes|boolean',
        'deductions.*.amount'      => 'required_if:deductions.*.is_custom,true|integer',
        'deductions.*.name'        => 'required_if:deductions.*.is_custom,true|string',
    ]);

    if ($validate->fails()) {
        return response()->json([
            'status'  => false,
            'message' => $validate->errors()
        ], 400);
    }

    $employee_id = $request->employee_id;
    $month       = $request->month;
    $year        = $request->year;

    if (Payroll::where('employee_id', $employee_id)
                ->where('year', $year)
                ->where('month', $month)
                ->exists()) {
        return response()->json([
            'success' => false,
            'message' => 'Payroll pada bulan tersebut sudah ada.',
            'data'    => null
        ], 422);
    }

    DB::beginTransaction();

    try {
        $employee   = Employee::with('position')->find($employee_id);
        $baseSalary = $request->base_salary ?? $employee->position->base_salary;
        $overtimePay = $this->calculateOvertimePay($employee_id, $month, $year, $baseSalary);

        $payroll = Payroll::create([
            'employee_id'     => $employee_id,
            'month'           => $month,
            'year'            => $year,
            'base_salary'     => $baseSalary,
            'total_allowance' => 0,
            'total_deduction' => 0,
            'overtime_pay'    => $overtimePay,
            'total_salary'    => $baseSalary + $overtimePay,
        ]);

        $totalAllowance = 0;
        $totalDeduction = 0;
        $details        = [];

        foreach ($request->allowances ?? [] as $item) {
            $allowance = Allowance::findOrFail($item['allowance_id']);

            $isCustom = $item['is_custom'] ?? false;
            $amount   = $isCustom ? $item['amount'] : $allowance->amount;
            $name     = $isCustom ? $item['name']   : $allowance->allowance_name;

            $details[] = [
                'payroll_id'   => $payroll->id,
                'allowance_id' => $allowance->id,
                'deduction_id' => null,
                'amount'       => $amount,
                'name'         => $name,
                'type'         => 'allowance',
                'is_custom'    => $isCustom,
            ];

            $totalAllowance += $amount;
        }

        foreach ($request->deductions ?? [] as $item) {
            $deduction = Deduction::findOrFail($item['deduction_id']);

            $isCustom = $item['is_custom'] ?? false;

            if ($isCustom) {
                $amount = $item['amount'];
                $name   = $item['name'];
            } else {
                $amount = $deduction->deduction_name === 'late'
                    ? ($this->calculateLatePay($employee_id, $month, $year, $deduction->amount) ?: $deduction->amount)
                    : $deduction->amount;
                $name = $deduction->deduction_name;
            }
            $details[] = [
                'payroll_id'   => $payroll->id,
                'allowance_id' => null,
                'deduction_id' => $deduction->id,
                'amount'       => $amount,
                'name'         => $name,
                'type'         => 'deduction',
                'is_custom'    => $isCustom,
            ];

            $totalDeduction += $amount;
        }
        PayrollDetail::insert($details);
        $payroll->update([
            'total_allowance' => $totalAllowance,
            'total_deduction' => $totalDeduction,
            'total_salary'    => $baseSalary + $overtimePay + $totalAllowance - $totalDeduction,
        ]);

        DB::commit();

        return new ApiResources(true, 'Data payroll berhasil ditambahkan.', $payroll->load('payrollDetails'));

    } catch (\Exception $e) {
        DB::rollBack();
        return response()->json([
            'success' => false,
            'message' => $e->getMessage(),
            'file'    => $e->getFile(),   
            'line'    => $e->getLine(),   
            'data'    => null
        ], 500);
    }
}

    private function calculateOvertimePay(int $employee_id, int $month, int $year, float $base_salary):float {
        $schedules = ShiftSchedulesDetail::with(['shift', 'shiftSchedule'])
            ->where('employee_id', $employee_id)
            ->whereHas('shiftSchedule', function ($q) use ($month, $year) {
                $q->whereMonth('schedule_date', $month)
                  ->whereYear('schedule_date', $year);
            })
            ->get();
            
        if ($schedules->isEmpty()) return 0.0; 

        $totalOvertimeHours = 0;

        $scheduleDates = $schedules->map(fn($s) => $s->shiftSchedule->schedule_date)->toArray();
        $attendances = Attendance::where('employee_id', $employee_id)
            ->whereIn('attendance_date', $scheduleDates)
            ->whereNotNull('check_out_time')
            ->get()
            ->keyBy('attendance_date');
        
        foreach ($schedules as $schedule) {
            if ($schedule->is_off) continue;

            $scheduleDate = $schedule->shiftSchedule->schedule_date;
            $attendance   = $attendances->get($scheduleDate); 
            
            if (!$attendance) continue;

            $checkOut = Carbon::parse($scheduleDate . ' ' . $attendance->check_out_time);
            $shiftEnd = Carbon::parse($scheduleDate . ' ' . $schedule->shift->end_time);
 
            if ($checkOut->gt($shiftEnd)) {
                $overtimeMinutes     = $checkOut->diffInMinutes($shiftEnd);
                $totalOvertimeHours += $overtimeMinutes / 60;
            }
        }
        
        if ($totalOvertimeHours <= 0) return 0;
        if ($base_salary <= 0) return 0;

        $hourlyRate  = $base_salary / 173;
        $overtimePay = $hourlyRate * self::OVERTIME_MULTIPLIER * $totalOvertimeHours;

        return round($overtimePay, 2);
    }

    private function calculateLatePay($employee_id, $month, $year, $amount): float {
        $schedules = ShiftSchedulesDetail::with(['shift', 'shiftSchedule'])
            ->where('employee_id', $employee_id)
            ->whereHas('shiftSchedule', function ($q) use ($month, $year) {
                $q->whereMonth('schedule_date', $month)
                  ->whereYear('schedule_date', $year);
            })
            ->get();
        
        $totalLateHours = 0;

        $scheduleDates = $schedules->map(fn($s) => $s->shiftSchedule->schedule_date)->toArray();
        $attendances = Attendance::where('employee_id', $employee_id)
            ->whereIn('attendance_date', $scheduleDates)
            ->whereNotNull('check_in_time')
            ->get()
            ->keyBy('attendance_date');

        foreach ($schedules as $schedule) {
            if ($schedule->is_off) continue;
            
            $shiftStartTime    = $schedule->shift->start_time;
            $scheduleDate    = $schedule->shiftSchedule->schedule_date;

            $attendance = $attendances->get($scheduleDate);
            
            if (!$attendance) continue;

            $checkIn  = Carbon::parse($scheduleDate . ' ' . $attendance->check_in_time);
            $shiftStart = Carbon::parse($scheduleDate . ' ' . $shiftStartTime);
            $shiftStartWithGrace = $shiftStart->copy()->addMinutes(15); 

            if ($checkIn->gt($shiftStart)) {
                $lateMinutes = $checkIn->diffInMinutes($shiftStartWithGrace);
                $totalLateHours += $lateMinutes / 60;
            }
        }

        if ($totalLateHours <= 0) return 0;

        $overtimePay = $totalLateHours * $amount;
        return round($overtimePay, 2);
    }
    
    public function show($id) {
        $payroll = Payroll::where('id', $id)->first();
        if (!$payroll) {
            return response()->json([
                'status' => false,
                'message' => 'Data payroll tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data payroll.', $payroll);
    }

    public function showByPeriod(Request $request) {
        $payroll = Payroll::where('month', $request->month)->where('year', $request->year)->paginate(10);
        if ($payroll->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data payroll tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data payroll.', $payroll);
    }
}
