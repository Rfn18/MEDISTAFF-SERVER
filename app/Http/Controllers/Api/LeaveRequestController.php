<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\LeaveRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Validator;

class LeaveRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaveRequest = LeaveRequest::with(['employee', 'leaveType'])->paginate(10);
        if ($leaveRequest->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data leave request.', $leaveRequest);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'leave_type_id' => 'required|exists:leave_types,id',
            'start_date' => 'required|date',
            'end_date' => 'required|date',
            'reason' => 'required|string|max:255',
            'status' => 'sometimes|string|in:pending,approved,rejected',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        if (Carbon::parse($request->start_date)->gt(Carbon::parse($request->end_date))) {
            return response()->json([
                'status' => false,
                'message' => 'Tanggal akhir harus lebih besar dari tanggal awal.'
            ], 400);
        }

        if (Carbon::parse($request->start_date)->lessThan(Carbon::today())) {
            return response()->json([
                'status' => false,
                'message' => 'Tanggal awal harus lebih besar atau sama dari hari ini.'
            ], 400);
        }

        if (Carbon::parse($request->end_date)->lt(Carbon::today())) {
            return response()->json([
                'status' => false,
                'message' => 'Tanggal akhir harus lebih besar dari hari ini.'
            ], 400);
        }

        $leaveRequest = LeaveRequest::create([
            'employee_id'   => auth()->id(),
            'leave_type_id' => $request->leave_type_id,
            'start_date'    => $request->start_date,
            'end_date'      => $request->end_date,
            'reason'        => $request->reason,
            'status'        => 'pending',
        ]);


        return new ApiResources(true, 'Data leave request berhasil ditambahkan.', $leaveRequest);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $leaveRequest = LeaveRequest::with(['employee', 'leaveType'])->find($id);
        if (!$leaveRequest) {
            return response()->json([
                'status' => false,
                'message' => 'Data leave request tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data leave request.', $leaveRequest);
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
            'leave_type_id' => 'sometimes|exists:leave_types,id',
            'start_date' => 'sometimes|date',
            'end_date' => 'sometimes|date',
            'reason' => 'sometimes|string|max:255',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $leaveRequest = LeaveRequest::find($id);
        if (!$leaveRequest) {
            return response()->json([
                'status' => false,
                'message' => 'Data leave request tidak ditemukan.'
            ], 404);
        }

        if (Carbon::parse($request->start_date)->gt(Carbon::parse($request->end_date))) {
            return response()->json([
                'status' => false,
                'message' => 'Tanggal akhir harus lebih besar dari tanggal awal.'
            ], 400);
        }

        if (Carbon::parse($request->start_date)->lt(Carbon::today())) {
            return response()->json([
                'status' => false,
                'message' => 'Tanggal awal harus lebih besar dari hari ini.'
            ], 400);
        }

        if (Carbon::parse($request->end_date)->lt(Carbon::today())) {
            return response()->json([
                'status' => false,
                'message' => 'Tanggal akhir harus lebih besar dari hari ini.'
            ], 400);
        }

        $leaveRequestValue = LeaveRequest::where('employee_id', auth()->id())->where('start_date', $request->start_date)->where('end_date', $request->end_date)->first();

        $leaveRequest->update([
            'employee_id'   => auth()->id(),
            'leave_type_id' => $request->leave_type_id,
            'start_date'    => $request->start_date,
            'end_date'      => $request->end_date,
            'reason'        => $request->reason,
            'status'        => $leaveRequestValue->status,
        ]);

        return new ApiResources(true, 'Data leave request berhasil diubah.', $leaveRequest);
    }

    public function approve(Request $request, $id) {
        $leaveRequest = LeaveRequest::find($id);
        if (!$leaveRequest) {
            return response()->json([
                'status' => false,
                'message' => 'Data leave request tidak ditemukan.'
            ], 404);
        }
        
        $leaveRequest->update([
            'status' => 'approved',
            'approved_by' => auth()->id(),
            'approved_at' => Carbon::now(),
        ]);

        return new ApiResources(true, 'Data leave request berhasil diapprove.', $leaveRequest);
    }

    public function reject(Request $request, $id) {
        $leaveRequest = LeaveRequest::find($id);
        if (!$leaveRequest) {
            return response()->json([
                'status' => false,
                'message' => 'Data leave request tidak ditemukan.'
            ], 404);
        }
        $leaveRequest->update([
            'status' => 'rejected',
            'approved_by' => auth()->id(),
            'approved_at' => Carbon::now(),
        ]);

        return new ApiResources(true, 'Data leave request berhasil ditolak.', $leaveRequest);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $leaveRequest = LeaveRequest::find($id);
        if (!$leaveRequest) {
            return response()->json([
                'status' => false,
                'message' => 'Data leave request tidak ditemukan.'
            ], 404);
        }

        $leaveRequest->delete();
        return new ApiResources(true, 'Data leave request berhasil dihapus.', $leaveRequest);
    }

    public function getDataByEmployee() {
        $leaveRequest = LeaveRequest::with(['employee', 'leaveType'])->where('employee_id', auth()->id())->paginate(10);
        if ($leaveRequest->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data leave request.', $leaveRequest);
    }

}
