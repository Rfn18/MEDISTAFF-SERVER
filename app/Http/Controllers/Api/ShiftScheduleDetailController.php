<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Illuminate\Http\Request;
use App\Http\Resources\ApiResources;
use App\Models\Shift;
use App\Models\ShiftSchedule;
use App\Models\ShiftSchedulesDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;

class ShiftScheduleDetailController extends Controller
{
    public function index()
    {
        $shiftScheduleDetail = ShiftSchedulesDetail::with('employee', 'shift', 'shiftSchedule')->paginate(10);
        if ($shiftScheduleDetail->total() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data shift schedule detail.', $shiftScheduleDetail);
    }

    public function store(Request $request)
    {
        DB::beginTransaction();
        try {
            $shift_schedule_id = $request->shift_schedule_id;
            if (!$shift_schedule_id) {
                return response()->json([
                    'status'  => false,
                    'message' => 'shift_schedule_id wajib diisi.'
                ], 422);
            }
            $generatedData = $this->generateSchedule($shift_schedule_id);
            if (empty($generatedData)) {
                return response()->json([
                    'status'  => false,
                    'message' => 'Gagal generate jadwal.'
                ], 422);
            }
            foreach ($generatedData as $item) {
                ShiftSchedulesDetail::create($item);
            }
            DB::commit();
            return response()->json([
                'status'  => true,
                'message' => 'Shift schedule berhasil di-generate otomatis.'
            ]);
        } catch (\Exception $e) {

            DB::rollBack();

            return response()->json([
                'status'  => false, 
                'message' => $e->getMessage()
            ], 500);
        }
    }

    public function show($id)
    {
        $shiftScheduleDetail = ShiftSchedulesDetail::with('employee', 'departement', 'shift', 'shiftSchedule')->find($id);
        if (!$shiftScheduleDetail) {
            return response()->json([
                'status' => false,
                'message' => 'Data shift schedule detail tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data shift schedule detail.', $shiftScheduleDetail);
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'employee_id' => 'sometimes|integer|exists:employees,id',
            'departement_id' => 'sometimes|integer|exists:departments,id',
            'shift_id' => 'nullable|integer|exists:shifts,id',
            'shift_schedule_id' => 'sometimes|integer|exists:shift_schedules,id',
            'is_off' => 'sometimes|boolean',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $shiftScheduleDetail = ShiftSchedulesDetail::find($id);
        if ($shiftScheduleDetail) {
             $isOff = $request->input('is_off', $shiftScheduleDetail->is_off);

            if (!$isOff && empty($request->input('shift_id', $shiftScheduleDetail->shift_id))) {
                return response()->json([
                    'status'  => false,
                    'message' => 'shift_id wajib diisi jika karyawan tidak off.'
                ], 422);
            }
            $shiftScheduleDetail->update(([
                'employee_id'       => $request->input('employee_id', $shiftScheduleDetail->employee_id),
                'departement_id'    => $request->input('departement_id', $shiftScheduleDetail->departement_id),
                'shift_id'          => $isOff ? null : $request->input('shift_id', $shiftScheduleDetail->shift_id),
                'shift_schedule_id' => $request->input('shift_schedule_id', $shiftScheduleDetail->shift_schedule_id),
                'is_off'            => $isOff,
            ]));
            return new ApiResources(true, 'Data shift schedule detail berhasil diubah.', $shiftScheduleDetail);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data shift schedule detail tidak ditemukan.'
        ], 404);
    }

    public function destroy($id)
    {
        $shiftScheduleDetail = ShiftSchedulesDetail::find($id);
        if ($shiftScheduleDetail) {
            $shiftScheduleDetail->delete();
            return new ApiResources(true, 'Data shift schedule detail berhasil dihapus.', $shiftScheduleDetail);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data shift schedule detail tidak ditemukan.'
        ], 404);
    }

    private function generateSchedule($shift_schedule_id) {
        $schedule = ShiftSchedule::with('department')->find($shift_schedule_id);

        if (!$schedule) return [];

        $baseDate = Carbon::parse($schedule->schedule_date); 
    
        $month = $baseDate->month; 
        $year  = $baseDate->year;

        $daysInMonth = Carbon::createFromDate($year, $month, 1)->daysInMonth;
        
        $employees = Employee::where('department_id', $schedule->departement_id)->get();
        $shifts = Shift::all();

        $result = [];

        foreach ($employees as $employee) {

        $workDays = 22; 
        $offDays = $daysInMonth - $workDays;

        $offIndexes = collect(range(1, $daysInMonth))
                        ->shuffle()
                        ->take($offDays)
                        ->toArray();
                        
        $lastShift = null;

        for ($day = 1; $day <= $daysInMonth; $day++) {
            $isOff = in_array($day, $offIndexes);
            if ($isOff) {
                $result[] = [
                    'schedule_date'     => Carbon::createFromDate($year, $month, $day)->format('Y-m-d'),
                    'employee_id'       => $employee->id,
                    'shift_id'          => null,
                    'shift_schedule_id' => $shift_schedule_id,
                    'is_off'            => true,
                ];
                $lastShift = null;
                continue;
            }

            $availableShifts = $shifts;

            if ($lastShift && $lastShift->shift_name == 'Night') {
                $availableShifts = $shifts->where('shift_name', '!=', 'Morning');
            }

            $shift = $availableShifts->random();

            $result[] = [
                'schedule_date'     => Carbon::create($year, $month, $day)->format('Y-m-d'),
                'employee_id'       => $employee->id,
                'departement_id'    => $employee->department_id,
                'shift_id'          => $shift->id,
                'shift_schedule_id' => $shift_schedule_id,
                'is_off'            => false,
            ];

            $lastShift = $shift;
        }}

        return $result;
    }
}
