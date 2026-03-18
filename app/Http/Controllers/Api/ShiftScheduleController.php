<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ApiResources;
use App\Models\ShiftSchedule;
use Illuminate\Support\Facades\Validator;
class ShiftScheduleController extends Controller
{
    public function index()
    {
        $shiftSchedule = ShiftSchedule::with('shiftSchedulesDetails')->paginate(10);
        if ($shiftSchedule->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data shift schedule.', $shiftSchedule);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'schedule_date' => 'required|date',
            'created_by' => 'required|string',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $shiftSchedule = ShiftSchedule::create([
            'schedule_date' => $request->schedule_date,
            'created_by' => $request->created_by,
            'updated_by' => "",
        ]);

        return new ApiResources(true, 'Data shift schedule berhasil ditambahkan.', $shiftSchedule);
    }

    public function show( $id)
    {
        $shiftSchedule = ShiftSchedule::with('shiftSchedulesDetails')->find($id)->first();
        if ($shiftSchedule->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data shift schedule tidak ditemukan.'
            ], 404);
        }
        $shiftSchedule->load('shiftSchedulesDetails');
        return new ApiResources(true, 'Detail data shift schedule.', $shiftSchedule);
    }

    public function update(Request $request,  $id)
    {
        $validate = Validator::make($request->all(), [
            'schedule_date' => 'sometimes|date',
            'created_by' => 'sometimes|string',
            'updated_by' => 'sometimes|string',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $shiftSchedule = ShiftSchedule::find($id);
        if ($shiftSchedule) {
            $shiftSchedule->update($request->only([
                'schedule_date',
                'created_by',
                'updated_by',
            ]));
            return new ApiResources(true, 'Data shift schedule berhasil diubah.', $shiftSchedule);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data shift schedule tidak ditemukan.'
        ], 404);
    }

    public function destroy( $id)
    {
        $shiftSchedule = ShiftSchedule::find($id);
        if ($shiftSchedule) {
            $shiftSchedule->delete();
            return new ApiResources(true, 'Data shift schedule berhasil dihapus.', $shiftSchedule);
        }
        
        return response()->json([
            'status' => false,
            'message' => 'Data shift schedule tidak ditemukan.'
        ], 404);
    }
}
