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
use App\Models\Payslip;
use App\Models\ShiftSchedulesDetail;
use App\Services\PayslipService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PayrollController extends Controller
{
    const OVERTIME_MULTIPLIER = 1.5;

    const WORKING_HOURS_PER_MONTH = 173;

    public function index()
    {
        $payroll = Payroll::with(['employee', 'payrollDetails', 'paySlips'])->paginate(10);
        if ($payroll->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.',
            ], 404);
        }

        return new ApiResources(true, 'List data payroll.', $payroll);
    }

    public function payroll(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'employee_id' => 'required|exists:employees,id',
            'month' => 'required|integer|min:1|max:12',
            'year' => 'required|integer|min:2000|max:2100',

            'allowances' => 'array',
            'deductions' => 'array',
        ]);

        $validator->after(function ($validator) use ($request) {

            foreach ($request->allowances ?? [] as $index => $item) {

                if (! isset($item['is_custom'])) {
                    $validator->errors()->add("allowances.$index.is_custom", 'is_custom wajib diisi');

                    continue;
                }

                if ($item['is_custom']) {
                    if (empty($item['name'])) {
                        $validator->errors()->add("allowances.$index.name", 'name wajib untuk custom');
                    }
                    if (! isset($item['amount'])) {
                        $validator->errors()->add("allowances.$index.amount", 'amount wajib untuk custom');
                    }
                } else {
                    if (empty($item['allowance_id'])) {
                        $validator->errors()->add("allowances.$index.allowance_id", 'allowance_id wajib jika bukan custom');
                    }
                }
            }

            foreach ($request->deductions ?? [] as $index => $item) {

                if (! isset($item['is_custom'])) {
                    $validator->errors()->add("deductions.$index.is_custom", 'is_custom wajib diisi');

                    continue;
                }

                if ($item['is_custom']) {
                    if (empty($item['name'])) {
                        $validator->errors()->add("deductions.$index.name", 'name wajib untuk custom');
                    }
                    if (! isset($item['amount'])) {
                        $validator->errors()->add("deductions.$index.amount", 'amount wajib untuk custom');
                    }
                } else {
                    if (empty($item['deduction_id'])) {
                        $validator->errors()->add("deductions.$index.deduction_id", 'deduction_id wajib jika bukan custom');
                    }
                }
            }
        });

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validator->errors(),
            ], 422);
        }

        if (Payroll::where('employee_id', $request->employee_id)->where('year', $request->year)->where('month', $request->month)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Payroll pada bulan tersebut sudah ada.',
                'data' => null,
            ], 422);
        }

        DB::beginTransaction();

        try {
            $employee = Employee::with('position')->find($request->employee_id);
            $position = $employee->position;

            [$startDate, $endDate] = $this->getPayrollPeriod($request->month, $request->year);

            $baseSalary = $request->base_salary ?? $position->base_salary;

            $overtimePay = $this->calculateOvertimePay($request->employee_id, $startDate, $endDate, $baseSalary);
            $absentPay = $this->calculateAbsentPay($request->employee_id, $startDate, $endDate, $baseSalary);
            $latePay = $this->calculateLatePay($request->employee_id, $startDate, $endDate, $baseSalary);
            $totalAllowance = 0;
            $totalDeduction = 0;

            $payroll = Payroll::create([
                'employee_id' => $request->employee_id,
                'month' => $request->month,
                'year' => $request->year,
                'base_salary' => $baseSalary,
                'total_allowance' => 0,
                'total_deduction' => 0,
                'overtime_pay' => $overtimePay,
                'late_pay' => $latePay,
                'absent_pay' => $absentPay,
                'total_salary' => 0,
            ]);

            if ($request->allowances) {
                foreach ($request->allowances as $item) {

                    if (! empty($item['allowance_id'])) {
                        $allowance = Allowance::find($item['allowance_id']);

                        $amount = $allowance->amount;
                        $name = $allowance->allowance_name;
                        $isCustom = false;

                    } else {
                        $amount = $item['amount'];
                        $name = $item['name'];
                        $isCustom = true;
                    }

                    PayrollDetail::create([
                        'payroll_id' => $payroll->id,
                        'allowance_id' => $item['allowance_id'] ?? null,
                        'amount' => $amount,
                        'name' => $name,
                        'type' => 'allowance',
                        'is_custom' => $isCustom,
                    ]);

                    $totalAllowance += $amount;
                }
            }

            if ($request->deductions) {
                foreach ($request->deductions as $item) {

                    if (! empty($item['deduction_id'])) {
                        $deduction = Deduction::find($item['deduction_id']);

                        $amount = $deduction->amount;
                        $name = $deduction->deduction_name;
                        $isCustom = false;

                    } else {
                        $amount = $item['amount'];
                        $name = $item['name'];
                        $isCustom = true;
                    }

                    PayrollDetail::create([
                        'payroll_id' => $payroll->id,
                        'deduction_id' => $item['deduction_id'] ?? null,
                        'amount' => $amount,
                        'name' => $name,
                        'type' => 'deduction',
                        'is_custom' => $isCustom,
                    ]);

                    $totalDeduction += $amount;
                }
            }
            $totalSalary = $baseSalary + $overtimePay - $absentPay + $totalAllowance - $totalDeduction - $latePay;

            $payroll->update([
                'total_allowance' => $totalAllowance,
                'total_deduction' => $totalDeduction,
                'total_salary' => round($totalSalary, 2),
            ]);

            $payslipService = app(PayslipService::class);
            $fileName = $payslipService->generate_payroll($payroll);

            $payslip = Payslip::create([
                'payroll_id' => $payroll->id,
                'employee_id' => $request->employee_id,
                'file_path' => $fileName,
            ]);

            DB::commit();

            return new ApiResources(true, 'Payroll berhasil dibuat.', $payroll);

        } catch (\Exception $e) {
            DB::rollBack();

            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    }

    public function payrollPreview(Request $request)
    {
        $valitdate = Validator::make($request->all(), [
            'employee_id' => 'required',
            'month' => 'required',
            'year' => 'required',
        ]);

        if ($valitdate->fails()) {
            return response()->json([
                'success' => false,
                'message' => $valitdate->errors(),
            ], 422);
        }
        $data = $this->calculatePayroll($request);

        return new ApiResources(true, 'Preview Payroll Berhasil Dibuat.', $data);
    }

    private function calculatePayroll(Request $request)
    {
        $employee = Employee::with('position')->find($request->employee_id);
        $position = $employee->position;

        [$startDate, $endDate] = $this->getPayrollPeriod($request->month, $request->year);

        $baseSalary = $position->base_salary;

        $overtimePay = $this->calculateOvertimePay($request->employee_id, $startDate, $endDate, $baseSalary);
        $absentPay = $this->calculateAbsentPay($request->employee_id, $startDate, $endDate, $baseSalary);
        $latePay = $this->calculateLatePay($request->employee_id, $startDate, $endDate, $baseSalary);

        return [
            'employee' => $employee,
            'base_salary' => $baseSalary,
            'overtime_pay' => $overtimePay,
            'absent_pay' => $absentPay,
            'late_pay' => $latePay,
        ];
    }

    private function calculateOvertimePay(int $employee_id, $startDate, $endDate, float $base_salary)
    {
        $schedules = ShiftSchedulesDetail::with('shift')
            ->where('employee_id', $employee_id)
            ->whereBetween('schedule_date', [$startDate, $endDate])
            ->get();

        if ($schedules->isEmpty() || $base_salary <= 0) {
            return 0;
        }

        $scheduleDates = $schedules->pluck('schedule_date')->toArray();

        $attendances = Attendance::where('employee_id', $employee_id)
            ->whereIn('attendance_date', $scheduleDates)
            ->get()
            ->keyBy(fn ($item) => Carbon::parse($item->attendance_date)->toDateString());

        $totalOvertimeMinutes = 0;

        foreach ($schedules as $schedule) {
            if ($schedule->is_off) {
                continue;
            }

            if (! $schedule->shift) {
                continue;
            }

            $date = Carbon::parse($schedule->schedule_date)->toDateString();
            $attendance = $attendances->get($date);

            if (! $attendance || ! $attendance->check_out_time) {
                continue;
            }

            $checkOut = Carbon::parse($date.' '.$attendance->check_out_time);
            $shiftEnd = Carbon::parse($date.' '.$schedule->shift->end_time);

            if ($shiftEnd->lt(Carbon::parse($date.' 12:00:00'))) {
                $shiftEnd->addDay();
            }

            if ($checkOut->gt($shiftEnd)) {
                $overtimeMinutes = $shiftEnd->diffInMinutes($checkOut);

                $overtimeMinutes = min($overtimeMinutes, 480);

                $totalOvertimeMinutes += $overtimeMinutes;
            }
        }

        if ($totalOvertimeMinutes <= 0) {
            return 0;
        }

        $hourlyRate = $base_salary / self::WORKING_HOURS_PER_MONTH;

        $overtimePay = $hourlyRate
            * self::OVERTIME_MULTIPLIER
            * ($totalOvertimeMinutes / 60);

        return round($overtimePay, 2);
    }

    private function calculateLatePay(int $employee_id, $startDate, $endDate, float $base_salary)
    {
        $schedules = ShiftSchedulesDetail::where('employee_id', $employee_id)
            ->whereBetween('schedule_date', [$startDate, $endDate])
            ->get();

        if ($schedules->isEmpty()) {
            return 0;
        }

        $scheduleDates = $schedules->pluck('schedule_date')->toArray();

        $attendances = Attendance::where('employee_id', $employee_id)
            ->whereIn('attendance_date', $scheduleDates)
            ->get()
            ->keyBy(fn ($item) => Carbon::parse($item->attendance_date)->toDateString());

        $totalLateMinutes = 0;

        foreach ($schedules as $schedule) {
            if ($schedule->is_off) {
                continue;
            }

            $date = Carbon::parse($schedule->schedule_date)->toDateString();
            $attendance = $attendances->get($date);

            if (
                ! $attendance ||
                ! $attendance->check_in_time
            ) {
                continue;
            }

            $lateMinutes = $attendance->late_minutes ?? 0;
            $lateMinutes = min($lateMinutes, 480);
            $totalLateMinutes += $lateMinutes;
        }

        if ($totalLateMinutes <= 0) {
            return 0;
        }

        $hourlyRate = $base_salary / 173;
        $latePay = $hourlyRate * ($totalLateMinutes / 60);

        return round($latePay, 2);
    }

    private function calculateAbsentPay(int $employee_id, $startDate, $endDate, float $amount)
    {
        $schedules = ShiftSchedulesDetail::where('employee_id', $employee_id)
            ->whereBetween('schedule_date', [$startDate, $endDate])
            ->get();

        if ($schedules->isEmpty()) {
            return 0;
        }

        $scheduleDates = $schedules->pluck('schedule_date')->toArray();

        $attendances = Attendance::where('employee_id', $employee_id)
            ->whereIn('attendance_date', $scheduleDates)
            ->get()
            ->keyBy('attendance_date');

        $totalAbsentDays = 0;

        foreach ($schedules as $schedule) {
            if ($schedule->is_off) {
                continue;
            }

            $date = Carbon::parse($schedule->schedule_date)->toDateString();
            $attendance = $attendances->get($date);

            if (
                ! $attendance ||
                ! $attendance->check_in_time
            ) {
                $totalAbsentDays++;
            }
        }

        if ($totalAbsentDays <= 0) {
            return 0;
        }

        $workingDays = $schedules->where('is_off', false)->count();

        $dailyRate = $amount / $workingDays;
        $absentPay = $totalAbsentDays * $dailyRate;

        return round($absentPay, 2);
    }

    public function show($id)
    {
        $payroll = Payroll::where('id', $id)->first();
        if (! $payroll) {
            return response()->json([
                'status' => false,
                'message' => 'Data payroll tidak ditemukan.',
            ], 404);
        }

        return new ApiResources(true, 'Detail data payroll.', $payroll);
    }

    public function showByPeriod(Request $request)
    {
        $payroll = Payroll::where('month', $request->month)->where('year', $request->year)->paginate(10);
        if ($payroll->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data payroll tidak ditemukan.',
            ], 404);
        }

        return new ApiResources(true, 'Detail data payroll.', $payroll);
    }

    private function getPayrollPeriod($month, $year)
    {
        if ($month == 1) {
            $startDate = Carbon::create($year, $month, 1);
        } else {
            $startDate = Carbon::create($year, $month - 1, 29);
        }

        $endDate = Carbon::create($year, $month, 28);

        return [$startDate, $endDate];
    }
}
