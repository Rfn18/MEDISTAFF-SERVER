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
        $payroll = Payroll::with(['employee', 'payrollDetails', 'paySlips'])->paginate(10);
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
            'employee_id' => 'required|exists:employees,id',
            'month' => 'required|integer|min:1|max:12',
            'year' => 'required|integer|min:2000|max:2100',
            'base_salary' => 'sometimes|integer',
        ]);

        $employee_id = $request->employee_id;
        $month = $request->month;
        $year = $request->year;

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }
     
        if (Payroll::where('employee_id', $employee_id)->where('year', $year)->where('month', $month)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Payroll pada bulan tersebut sudah ada.',
                'data' => null
            ], 422);
        }

        DB::beginTransaction();

        try {
            $employee = Employee::with('position')->find($request->employee_id);
            $position = $employee->position;

            $baseSalary = $request->base_salary ? $request->base_salary : $position->base_salary; 
            $overtimePay = $this->calculateOvertimePay($request->employee_id, $request->month, $request->year, $baseSalary);
            $total_salary = $baseSalary + $overtimePay;

            $payroll = Payroll::create([
                'employee_id' => $request->employee_id,
                'month' => $request->month,
                'year' => $request->year,
                'base_salary' => $baseSalary,
                'total_allowance' => 0,
                'total_deduction' => 0,
                'overtime_pay' => $overtimePay,
                'total_salary' => $total_salary,
            ]);

            DB::commit();
            return new ApiResources(true, 'Data payroll berhasil ditambahkan.', $payroll);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
                'data' => null
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

    public function createAllowance(Request $request) {
        $validate = Validator::make($request->all(), [
            'payroll_id' => 'required|exists:payrolls,id',
            'allowance_id' => 'required|exists:allowances,id',
            'name' => 'sometimes|string',
            'is_custom' => 'sometimes|string',
            'amount' => 'sometimes|integer'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        $allowace = Allowance::where('id', $request->allowance_id)->first();

        if (!$allowace) {
            return response()->json([
                'status' => false,
                'message' => 'Data allowance tidak ditemukan.'
            ], 404);
        }

        $payroll = Payroll::where('id', $request->payroll_id)->first();

        if (!$payroll) {
            return response()->json([
                'status' => false,
                'message' => 'Data payroll tidak ditemukan.'
            ], 404);
        }

        if (PayrollDetail::where('payroll_id', $request->payroll_id)->where('allowance_id', $request->allowance_id)->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'Data allowance sudah ada.'
            ], 422);
        }

        if ($request->is_custom) {
            $payrollDetail = PayrollDetail::create([
                'payroll_id' => $request->payroll_id,
                'allowance_id' => $request->allowance_id,
                'amount' => $request->amount,
                'name' => $request->name,
                'type' => 'allowance',
                'is_custom' => true
            ]);
        } else {
            $payrollDetail = PayrollDetail::create([
                'payroll_id' => $request->payroll_id,
                'allowance_id' => $request->allowance_id,
                'amount' => $allowace->amount,
                'name' => $allowace->allowance_name,
                'type' => 'allowance',
                'is_custom' => false
            ]);
        }

        $finalAmount = $request->is_custom ? $request->amount : $allowace->amount;
        $payroll->increment('total_allowance', $finalAmount);
        $payroll->increment('total_salary', $finalAmount);

        return new ApiResources(true, 'Data allowance berhasil ditambahkan.', $payrollDetail);
    }

    public function createDeduction(Request $request) {
        $validate = Validator::make($request->all(), [
            'payroll_id' => 'required|exists:payrolls,id',
            'deduction_id' => 'required|exists:deductions,id',
            'is_custom' => 'sometimes|string',
            'amount' => 'sometimes|integer',
            'name' => 'sometimes|string'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        $deduction = Deduction::where('id', $request->deduction_id)->first();

        if (!$deduction) {
            return response()->json([
                'status' => false,
                'message' => 'Data deduction tidak ditemukan.'
            ], 404);
        }

        $payroll = Payroll::where('id', $request->payroll_id)->first();

        if (!$payroll) {
            return response()->json([
                'status' => false,
                'message' => 'Data payroll tidak ditemukan.'
            ], 404);
        }

        if (PayrollDetail::where('payroll_id', $request->payroll_id)->where('deduction_id', $request->deduction_id)->exists()) {
            return response()->json([
                'status' => false,
                'message' => 'Data deduction sudah ada.'
            ], 422);
        }

        $employee_id = $payroll->employee_id;

        $totalLate = 0;

        if ($deduction->deduction_name == 'late') {
            $totalLate = $this->calculateLatePay($employee_id, $payroll->month, $payroll->year, $deduction->amount);
        }

        $totalLate = $totalLate > 0 ? $totalLate : $deduction->amount;
        
        if ($request->is_custom) {
            $payrollDetail = PayrollDetail::create([
                'payroll_id' => $request->payroll_id,
                'deduction_id' => $request->deduction_id,
                'amount' => $request->amount,
                'name' => $request->name,
                'type' => 'deduction',
                'is_custom' => true
            ]);
        } else {
            $payrollDetail = PayrollDetail::create([
                'payroll_id' => $request->payroll_id,
                'deduction_id' => $request->deduction_id,
                'amount' => $totalLate,
                'name' => $deduction->deduction_name,
                'type' => 'deduction',
                'is_custom' => false
            ]);
        }

        $payroll->increment('total_deduction', $totalLate);
        $payroll->decrement('total_salary', $totalLate);

        return new ApiResources(true, 'Data deduction berhasil ditambahkan.', $payrollDetail);
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
