<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\LeaveType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LeaveTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaveType = LeaveType::paginate(10);
        if ($leaveType->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data leave type.', $leaveType);
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
            'leave_type_name' => 'required|string|max:255',
            'max_days' => 'required|integer',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $leaveType = LeaveType::create($request->only([
            'leave_type_name',
            'max_days',
        ]));

        return new ApiResources(true, 'Data leave type berhasil ditambahkan.', $leaveType);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {   
        $leaveType = LeaveType::find($id);
        if (!$leaveType) {
            return response()->json([
                'status' => false,
                'message' => 'Data leave type tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data leave type.', $leaveType);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'leave_type_name' => 'sometimes|string|max:255',
            'max_days' => 'sometimes|integer',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $leaveType = LeaveType::find($id);
        if (!$leaveType) {
            return response()->json([
                'status' => false,
                'message' => 'Data leave type tidak ditemukan.'
            ], 404);
        }

        $leaveType->update($request->only([
            'leave_type_name',
            'max_days',
        ]));

        return new ApiResources(true, 'Data leave type berhasil diubah.', $leaveType);
    }
    public function destroy( $id)
    {
        $leaveType = LeaveType::find($id);
        if (!$leaveType) {
            return response()->json([
                'status' => false,
                'message' => 'Data leave type tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Data leave type berhasil dihapus.', $leaveType);
    }
}
