<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Attendance;
use App\Models\Employee;
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


        $attendance = Attendance::where('employee_id', $request->employee_id)
            ->whereMonth('attendance_date', $request->month)
            ->whereYear('attendance_date', $request->year)
            ->get();

        if ($attendance->count() === 0) {
            return response()->json([
                'success' => false,
                'message' => 'Data absen tidak ditemukan.'
            ], 404);
        }
        
        $total_present = Attendance::where('employee_id', $request->employee_id)
        ->whereMonth('attendance_date', $request->month)
        ->whereYear('attendance_date', $request->year)
        ->whereIn('status', ['on_time', 'late'])
        ->count();
        
        $total_late = Attendance::where('employee_id', $request->employee_id)
        ->whereMonth('attendance_date', $request->month)
        ->whereYear('attendance_date', $request->year)
        ->where('status', 'late')
        ->count();
        
        $total_leave = LeaveRequest::where('employee_id', $request->employee_id)
        ->whereMonth('start_date', $request->month)
        ->whereYear('start_date', $request->year)
        ->count();

        
        dd($total_late, $attendance, $total_present, $total_leave);
        
    }
}
