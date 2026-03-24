<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Deduction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DeductionController extends Controller
{
    public function index()
    {
        $deduction = Deduction::paginate(10);
        if ($deduction->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data deduction.', $deduction);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'deduction_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'description' => 'sometimes|string|max:255',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        $deduction = Deduction::create($request->only([
            'deduction_name',
            'amount',
            'description',
        ]));

        return new ApiResources(true, 'Data deduction berhasil ditambahkan.', $deduction);
    }

    public function show($id)
    {
        $deduction = Deduction::find($id);
        if (!$deduction) {
            return response()->json([
                'status' => false,
                'message' => 'Data deduction tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data deduction.', $deduction);
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'deduction_name' => 'sometimes|string|max:255',
            'amount' => 'sometimes|numeric|min:0',
            'description' => 'sometimes|string|max:255',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        $deduction = Deduction::find($id);
        if (!$deduction) {
            return response()->json([
                'status' => false,
                'message' => 'Data deduction tidak ditemukan.'
            ], 404);
        }

        $deduction->update($request->only([
            'deduction_name',
            'amount',
            'description',
        ]));

        return new ApiResources(true, 'Data deduction berhasil diubah.', $deduction);
    }

    public function destroy($id)
    {
        $deduction = Deduction::find($id);
        if (!$deduction) {
            return response()->json([
                'status' => false,
                'message' => 'Data deduction tidak ditemukan.'
            ], 404);
        }

        $deduction->delete();
        return new ApiResources(true, 'Data deduction berhasil dihapus.', $deduction);
    }
}
