<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ApiResources;
use App\Models\ShiftSchedule;
use App\Models\ShiftSchedulesDetail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ShiftScheduleDetailController extends Controller
{
    public function index()
    {
        $shiftScheduleDetail = ShiftSchedulesDetail::with('employee', 'departement', 'shift', 'shiftSchedule')->paginate(10);
        if ($shiftScheduleDetail->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data shift schedule detail.', $shiftScheduleDetail);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'employee_id' => 'required|integer|exists:employees,id',
            'departement_id' => 'required|integer|exists:departments,id',
            'shift_id' => 'required|integer|exists:shifts,id',
            'shift_schedule_id' => 'required|integer|exists:shift_schedules,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        DB::beginTransaction();
        
        try {
        $data = $request->all();
        $shift_schedule = ShiftSchedule::where('id', $data[0]['shift_schedule_id'])->first();

        if (!$shift_schedule) {
            return response()->json([
                'status' => false,
                'message' => 'Data shift schedule tidak ditemukan.'
            ], 404);
        }

        foreach ($data as $item) {
            $exists = ShiftSchedulesDetail::where('employee_id', $item['employee_id'])->where('shift_schedule_id', $item['shift_schedule_id'])->first();
            if ($exists) {
                return response()->json([
                    'status' => false,
                    'message' => 'Data shift schedule detail sudah ada.'
                ], 400);
            }
            
            ShiftSchedulesDetail::create([
                'employee_id' => $item['employee_id'],
                'departement_id' => $item['departement_id'],
                'shift_id' => $item['shift_id'],
                'shift_schedule_id' => $item['shift_schedule_id'],
            ]);
        }   
        DB::commit();
        return new ApiResources(true, 'Data shift schedule detail berhasil ditambahkan.', $shift_schedule);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'status' => false,
                'message' => 'Data shift schedule detail gagal ditambahkan.'
            ], 500);    
        }
    }

    public function show($id)
    {
        $shiftScheduleDetail = ShiftSchedulesDetail::with('employee', 'departement', 'shift', 'shiftSchedule')->find($id)->first();
        if ($shiftScheduleDetail->count() === 0) {
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
            'shift_id' => 'sometimes|integer|exists:shifts,id',
            'shift_schedule_id' => 'sometimes|integer|exists:shift_schedules,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $shiftScheduleDetail = ShiftSchedulesDetail::find($id);
        if ($shiftScheduleDetail) {
            $shiftScheduleDetail->update($request->only([
                'employee_id',
                'departement_id',
                'shift_id',
                'shift_schedule_id',
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
}
