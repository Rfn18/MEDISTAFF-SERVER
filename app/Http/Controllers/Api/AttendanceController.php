<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Attendance;
use App\Models\AttendanceSetting;
use App\Models\AttendanceSumary;
use App\Models\LeaveRequest;
use App\Models\ShiftSchedulesDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AttendanceController extends Controller
{
    public function index() {
        $attendance = Attendance::paginate(10);
        if ($attendance->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }   

        $attendance->load('employee');
        return new ApiResources(true, 'List data attendance.', $attendance);
    }

    public function checkIn(Request $request) {
        $validator = Validator::make($request->all(), [
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'device_id' => 'required|string',
            'qr_payload' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        };

        $currentPayload = $this->generateCurrentQrPayload();

        $timeSlotPast = floor((time() - 30) / 30);
        $setting = AttendanceSetting::first();
        $pastPayload = hash_hmac('sha256', $setting->id . $timeSlotPast, "FaterinoGanteng");

        if ($request->qr_payload !== $currentPayload && $request->qr_payload !== $pastPayload) {
            return response()->json([
                'success' => false,
                'message' => 'QR Code tidak valid atau sudah kedaluwarsa.'
            ], 403);
        }

        $gracePeriodMinutes = 15;

        $now = Carbon::now();
        $today = $now->toDateString();

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
            ->where('schedule_date', $today)
            ->first();
            
        if (!$scheduleDetail) {
            return response()->json([
                'success' => false,
                'message' => 'Belum ada schedule untuk hari ini.'
            ], 404);
        }

         if ($scheduleDetail->is_off) {
            return response()->json([
                'success' => false,
                'message' => 'Anda terjadwal libur hari ini.'
            ], 400);
         }

        $longitude = $request->longitude;
        $latitude  = $request->latitude;

        $attandanceSetting = AttendanceSetting::first();
        
        if (!$attandanceSetting) {
            return response()->json([
                'success' => false,
                'message' => 'Lokasi kantor belum di tentukan.'
            ], 404);
        }

        $nearbyLocations = AttendanceSetting::query()
        ->whereRaw('ST_Distance_Sphere(point(longitude, latitude), point(?, ?)) <= ?', [
            $longitude,
            $latitude,
            $attandanceSetting->radius_meters
        ])
        ->get();

        $main_device_id = auth()->user()->device_id;

        if ($main_device_id !== $request->device_id) {
            return response()->json([
                'success' => false,
                'message' => 'Device id tidak sesuai.'
            ], 400);
        }

        if ($nearbyLocations->count() === 0) {
            return response()->json([
                'success' => false,
                'message' => 'Anda berada di luar area absensi.'
            ], 404);
        }
    
        $shiftStart = Carbon::parse($scheduleDetail->shift->start_time);
        $cutoff     = $shiftStart->copy()->addMinutes($gracePeriodMinutes);
        $lateMinutes = $cutoff->diffInMinutes($now);
        
        if ($now->lessThan($shiftStart)) {
            return response()->json([
                'success' => false,
                'message' => 'Belum waktunya check-in, jadwal anda ' . $shiftStart
            ], 400);
        }   

        $status = $now->lessThanOrEqualTo($cutoff) ? 'present' : 'late';
        
        $attandance = Attendance::create([
            'employee_id'    => $employee->id,
            'attendance_date' => $today,
            'check_in_time'  => $now->toTimeString(),
            'status'         => $status,
            'late_minutes'   => $lateMinutes < 0 ? 0 : $lateMinutes,
            'longitude'      => $longitude,
            'latitude'       => $latitude,
            'device_id'      => $request->device_id
        ]);

        return new ApiResources(true, 'Data attendance berhasil dibuat.', $attandance);
    }

    public function checkOut(Request $request) {

        $validator = Validator::make($request->all(), [
            'latitude' => 'required|numeric',
            'longitude' => 'required|numeric',
            'device_id' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()
            ], 400);
        };

        $now = Carbon::now();

        $today    = $now->toDateString();

        $employee = auth()->user()->employee;

        if (!$employee) {
            return response()->json([
                'success' => false,
                'message' => 'Employee tidak ditemukan.'
            ], 404);
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

        $main_device_id = auth()->user()->device_id;

        if ($main_device_id !== $request->device_id) {
            return response()->json([
                'success' => false,
                'message' => 'Device id tidak sesuai.'
            ], 400);
        }

        $longitude = $request->longitude;
        $latitude  = $request->latitude;

        $attandanceSetting = AttendanceSetting::first();

        $nearbyLocations = AttendanceSetting::query()
        ->whereRaw('ST_Distance_Sphere(point(longitude, latitude), point(?, ?)) <= ?', [
            $longitude,
            $latitude,
            $attandanceSetting->radius_meters
        ])
        ->get();

        if ($nearbyLocations->count() === 0) {
            return response()->json([
                'success' => false,
                'message' => 'Anda berada di luar area absensi.'
            ], 404);
        }

        $endTime = Carbon::parse($scheduleDetail->shift->end_time);
        
        if ($now->lessThan($endTime)) {
            return response()->json([
                'success' => false,
                'message' => 'Belum waktunya check-out.'
            ], 400);
        }

        $attendance->update([
            'longitude' => $longitude,
            'latitude'  => $latitude
        ]);

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

        $totalOnTime = $attendanceByStatus->get('present', collect())->count();
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
        
        $totalOffDays = $shiftDetails->where('is_off', true)->count();
        $totalAbsent = max(0, $totalScheduledDays - $totalPresent - $totalLeaveDays - $totalSickDays - $totalOffDays);
        
        $summary = AttendanceSumary::updateOrCreate([
            'employee_id' => $employeeId,
            'month' => $month,
            'year' => $year
        ], [
            'total_present' => $totalPresent,
            'total_late' => $totalLate,
            'total_absent' => $totalAbsent,
            'total_leave' => $totalLeaveDays,
            'total_sick' => $totalSickDays,
            'total_off' => $totalOffDays
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
    
    private function generateCurrentQrCode() {
        $office = AttendanceSetting::first();
        $secret_key = "FasterinoGanteng";

        $time_slot = floor(time() / 30);

        return hash_hmac('sha256', $office->id . $time_slot, $secret_key);
    }

    public function getDinamicQr() {
        return response()->json([
            'success' => true,
            'qr_payload' => $this->generateCurrentQrCode()
        ]);
    }
}

