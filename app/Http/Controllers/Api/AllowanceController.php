<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Allowance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AllowanceController extends Controller
{
    public function index()
    {
        $allowance = Allowance::paginate(10);
        if ($allowance->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data allowance.', $allowance);
    }

    public function store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'allowance_name' => 'required|string|max:255',
            'amount' => 'required|numeric|min:0',
            'description' => 'sometimes|string|max:255',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        $allowance = Allowance::create($request->only([
            'allowance_name',
            'amount',
            'description',
        ]));

        return new ApiResources(true, 'Data allowance berhasil ditambahkan.', $allowance);
    }

    public function show($id)
    {
        $allowance = Allowance::find($id);
        if (!$allowance) {
            return response()->json([
                'status' => false,
                'message' => 'Data allowance tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data allowance.', $allowance);
    }

    public function update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'allowance_name' => 'sometimes|string|max:255',
            'amount' => 'sometimes|numeric|min:0',
            'description' => 'sometimes|string|max:255',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        $allowance = Allowance::find($id);
        if (!$allowance) {
            return response()->json([
                'status' => false,
                'message' => 'Data allowance tidak ditemukan.'
            ], 404);
        }

        $allowance->update($request->only([
            'allowance_name',
            'amount',
            'description',
        ]));

        return new ApiResources(true, 'Data allowance berhasil diubah.', $allowance);
    }

    public function destroy($id)
    {
        $allowance = Allowance::find($id);
        if (!$allowance) {
            return response()->json([
                'status' => false,
                'message' => 'Data allowance tidak ditemukan.'
            ], 404);
        }

        $allowance->delete();
        return new ApiResources(true, 'Data allowance berhasil dihapus.', $allowance);
    }
}
