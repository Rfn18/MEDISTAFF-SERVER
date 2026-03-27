<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ApiResources;
use App\Models\ShiftSchedule;
use Carbon\Carbon;
use Illuminate\Support\Facades\Validator;
class ShiftScheduleController extends Controller
{
    public function index()
    {
        $shiftSchedule = ShiftSchedule::with('shiftSchedulesDetails')->paginate(10);
        if ($shiftSchedule->isEmpty()) {
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
            'month' => 'required|integer',
            'year' => 'required|integer',
            'created_by' => 'required|string',
            'departement_id' => 'required|integer|exists:departments,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $shiftSchedule = ShiftSchedule::where('schedule_date', $request->schedule_date)->first();
        if ($shiftSchedule) {
            return response()->json([
                'status' => false,
                'message' => 'Data shift schedule sudah ada.'
            ], 400);
        }

        if (Carbon::parse($request->schedule_date)->lessThan(Carbon::today())) {
            return response()->json([
                'status' => false,
                'message' => 'Tanggal harus lebih besar atau sama dengan tanggal hari ini.'
            ], 400);
        }

        $scheduleDate = $request->year . '-' . $request->month . '-01';
        $shiftSchedule = ShiftSchedule::create([
            'schedule_date' => $scheduleDate,
            'created_by' => $request->created_by,
            'updated_by' => "",
            'departement_id' => $request->departement_id,
        ]);

        return new ApiResources(true, 'Data shift schedule berhasil ditambahkan.', $shiftSchedule);
    }

    public function show( $id)
    {
        $shiftSchedule = ShiftSchedule::with('shiftSchedulesDetails')->find($id);
        if (!$shiftSchedule) {
            return response()->json([
                'status' => false,
                'message' => 'Data shift schedule tidak ditemukan.'
            ], 404);
        }
        $shiftSchedule->load('shiftSchedulesDetails');
        return new ApiResources(true, 'Detail data shift schedule.', $shiftSchedule);
    }

    public function showDataByDepartment($id)
    {
        $shiftSchedule = ShiftSchedule::with('shiftSchedulesDetails')->where('departement_id', $id)->get();
        if ($shiftSchedule->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data shift schedule tidak ditemukan.'
            ], 404);
        }
        return new ApiResources(true, 'Detail data shift schedule.', $shiftSchedule);
    }

    public function update(Request $request,  $id)
    {
        $validate = Validator::make($request->all(), [
            'month' => 'sometimes|integer',
            'year' => 'sometimes|integer',
            'created_by' => 'sometimes|string',
            'updated_by' => 'sometimes|string',
            'departement_id' => 'sometimes|integer|exists:departments,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        if (Carbon::parse($request->schedule_date)->lessThan(Carbon::today())) {
            return response()->json([
                'status' => false,
                'message' => 'Tanggal harus lebih besar atau sama dengan tanggal hari ini.'
            ], 400);
        }
        
        $shiftSchedule = ShiftSchedule::find($id);
        if ($shiftSchedule) {
            $scheduleDate = Carbon::create($request->year, $request->month, 1);
            $shiftSchedule->update([
                'schedule_date' => $scheduleDate,
                'created_by' => $request->created_by,
                'updated_by' => $request->updated_by,
                'departement_id' => $request->departement_id,
            ]);
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
