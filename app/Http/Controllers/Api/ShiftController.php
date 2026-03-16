<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ApiResources;
use App\Models\Shift;
use Illuminate\Support\Facades\Validator;

class ShiftController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shift = Shift::paginate(10);
        if ($shift->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data shift.', $shift);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'shift_name' => 'required|string',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i',
            'description' => 'sometimes|string|max:255',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $shift = Shift::create($request->only([
            'shift_name',
            'start_time',
            'end_time',
            'description'
        ]));

        return new ApiResources(true, 'Data shift berhasil ditambahkan.', $shift);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $shift = Shift::where('id', $id)->first();
        if ($shift->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data shift tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data shift.', $shift);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'shift_name' => 'sometimes|string',
            'start_time' => 'sometimes|date_format:H:i',
            'end_time' => 'sometimes|date_format:H:i',
            'description' => 'sometimes|string|max:255',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        $shift = Shift::find($id);
        if (!$shift) {
            return response()->json([
                'status' => false,
                'message' => 'Data shift tidak ditemukan.'
            ], 404);
        }

        $shift->update($request->only([
            'shift_name',
            'start_time',
            'end_time',
            'description'
        ]));
        return new ApiResources(true, 'Data shift berhasil diubah.', $shift);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $shift = Shift::find($id);
        if (!$shift) {
            return response()->json([
                'status' => false,
                'message' => 'Data shift tidak ditemukan.'
            ], 404);
        }
            $shift->delete();
        return new ApiResources(true, 'Data shift berhasil dihapus.', $shift);
    }
}
