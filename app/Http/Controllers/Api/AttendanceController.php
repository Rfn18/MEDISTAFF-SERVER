<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Attendance;
use App\Models\AttendanceSumary;
use App\Models\LeaveRequest;
use App\Models\ShiftSchedulesDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    public function index() {
        $attandance = Attendance::paginate(10);
        if ($attandance->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data attendance.', $attandance);
    }

    public function checkIn() {
        $gracePeriodMinutes = 15;

        $now      = Carbon::now();
        $today    = $now->toDateString();

        $employee = auth()->user()->employee;

        if (!$employee) {
            return response()->json([
                'success' => false,
                'message' => 'Employee tidak ditemukan.'
            ], 404);
        }

        $alreadyCheckedIn = Attendance::where('employee_id', $employee->id)
            ->where('attendance_date', $today)
            ->exists();

        if ($alreadyCheckedIn) {
            return response()->json([
                'success' => false,
                'message' => 'Sudah check-in hari ini.'
            ], 400);
        }

        $scheduleDetail = ShiftSchedulesDetail::with('shift')
            ->where('employee_id', $employee->id)
            ->whereHas('shiftSchedule', function ($query) use ($today) {
                $query->where('schedule_date', $today);
            })
            ->first();

        if (!$scheduleDetail) {
            return response()->json([
                'success' => false,
                'message' => 'Belum ada schedule untuk hari ini.'
            ], 404);
        }

        $shiftStart = Carbon::parse($scheduleDetail->shift->start_time);
        $cutoff     = $shiftStart->copy()->addMinutes($gracePeriodMinutes);
        $lateMinutes = $cutoff->diffInMinutes($now);
        
        if ($now->lessThan($shiftStart)) {
            return response()->json([
                'success' => false,
                'message' => 'Belum waktunya check-in.'
            ], 400);
        }   

        $status = $now->lessThanOrEqualTo($cutoff) ? 'on_time' : 'late';
        
        $attandance = Attendance::create([
            'employee_id'    => $employee->id,
            'attendance_date' => $today,
            'check_in_time'  => $now->toTimeString(),
            'status'         => $status,
            'late_minutes'   => $lateMinutes 
        ]);

        return new ApiResources(true, 'Data attendance berhasil dibuat.', $attandance);
    }

    public function checkOut() {
        $now      = Carbon::now();
        $today    = $now->toDateString();

        $employee = auth()->user()->employee;

        if (!$employee) {
            return response()->json([
                'success' => false,
                'message' => 'Employee tidak ditemukan.'
            ], 404);
        }

        $attendance = Attendance::where('employee_id', $employee->id)
            ->where('attendance_date', $today)
            ->first();

        if (!$attendance) {
            return response()->json([
                'success' => false,
                'message' => 'Belum check-in hari ini.'
            ], 400);
        }

        if ($attendance->check_out_time) {
            return response()->json([
                'success' => false,
                'message' => 'Sudah check-out hari ini.'
            ], 400);
        }

        $attendance->update([
            'check_out_time' => $now->toTimeString()
        ]);

        return new ApiResources(true, 'Data attendance berhasil diubah.', $attendance);
    }

    public function summarise(Request $request) {
        $validate = Validator::make($request->all(), [
            'employee_id' => 'required|exists:employees,id',
            'month' => 'required|integer|min:1|max:12',
            'year' => 'required|integer|min:2000|max:2100'
        ]);
        
        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $employeeId = $request->employee_id;
        $month = $request->month;
        $year = $request->year;

        $shiftDetails = ShiftSchedulesDetail::where('employee_id', $employeeId)
            ->whereHas('shiftSchedule', function ($query) use ($month, $year) {
                $query->whereMonth('schedule_date', $month)
                    ->whereYear('schedule_date', $year);
            })
            ->with(['shiftSchedule', 'shift'])
            ->get();

        $totalScheduledDays = $shiftDetails->count();

        if ($totalScheduledDays === 0) {
            return response()->json([
                'success' => false,
                'message' => 'Tidak ada jadwal shift untuk employee di periode ini.'
            ], 404);
        }

        $attendances = Attendance::where('employee_id', $employeeId)
            ->whereMonth('attendance_date', $month)
            ->whereYear('attendance_date', $year)
            ->get();

        $attendanceByStatus = $attendances->groupBy('status');

        $totalOnTime = $attendanceByStatus->get('on_time', collect())->count();
        $totalLate = $attendanceByStatus->get('late', collect())->count();
        $totalPresent = $totalOnTime + $totalLate;

        $leaveRequests = LeaveRequest::where('employee_id', $employeeId)
        ->where('status', 'approved')
        ->where(function ($query) use ($month, $year) {
            $query->where(function ($q) use ($month, $year) {
                $q->whereMonth('start_date', $month)
                  ->whereYear('start_date', $year);
            })->orWhere(function ($q) use ($month, $year) {
                $q->whereMonth('end_date', $month)
                  ->whereYear('end_date', $year);
            })->orWhere(function ($q) use ($month, $year) {
                $startOfMonth = "{$year}-{$month}-01";
                $endOfMonth = date('Y-m-t', strtotime($startOfMonth));
                $q->where('start_date', '<', $startOfMonth)
                  ->where('end_date', '>', $endOfMonth);
            });
        })
        ->with('leaveType')
        ->get();
        $totalLeaveDays = 0;
        $totalSickDays = 0;
        
        foreach ($leaveRequests as $leave) {
            $leaveDaysInMonth = $this->calculateLeaveDaysInMonth(
                $leave->start_date,
                $leave->end_date,
                $month,
                $year
            );

            if ($leave->leave_type_id == 1) {
                $totalSickDays += $leaveDaysInMonth;
            } else {
                $totalLeaveDays += $leaveDaysInMonth;
            }
        }
        $totalAbsent = max(0, $totalScheduledDays - $totalPresent - $totalLeaveDays - $totalSickDays);

        $summary = AttendanceSumary::updateOrCreate([
            'employee_id' => $employeeId,
            'month' => $month,
            'year' => $year
        ], [
            'total_present' => $totalPresent,
            'total_late' => $totalLate,
            'total_absent' => $totalAbsent,
            'total_leave' => $totalLeaveDays,
            'total_sick' => $totalSickDays
        ]);
        
        return new ApiResources(true, 'Berhasiil Input Rankuman Absen.', $summary);
    }
    private function calculateLeaveDaysInMonth($startDate, $endDate, $month, $year)
    {
        $start = new \DateTime($startDate);
        $end = new \DateTime($endDate);
        
        $monthStart = new \DateTime("{$year}-{$month}-01");
        $monthEnd = new \DateTime($monthStart->format('Y-m-t'));
        
        $effectiveStart = max($start, $monthStart);
        $effectiveEnd = min($end, $monthEnd);
        
        if ($effectiveStart > $effectiveEnd) {
            return 0;
        }
    
        $diff = $effectiveStart->diff($effectiveEnd);
        return $diff->days + 1;
    }
}

