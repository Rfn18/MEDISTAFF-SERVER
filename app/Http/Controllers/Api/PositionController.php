<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Position;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PositionController extends Controller
{
    public function Index()
    {
        $position = Position::paginate(10);
        if ($position->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data position.', $position);
    }

    public function Store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'position_name' => 'required|string',
            'base_salary' => 'required|numeric',
            'description' => 'sometimes|string|max:255',
            'category'=> 'required|in:medis,non-medis',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $position = Position::create($request->only([
            'position_name',
            'base_salary',
            'description',
            'category'
        ]));

        return new ApiResources(true, 'Data position berhasil ditambahkan.', $position);
    }

    public function Show($id)
    {
        $position = Position::where('id', $id)->first();
        if (!$position) {
            return response()->json([
                'status' => false,
                'message' => 'Data position tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data position.', $position);
    }

    public function Update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'position_name' => 'sometimes|string',
            'base_salary' => 'sometimes|numeric',
            'description' => 'sometimes|string|max:255',
            'category'=> 'sometimes|in:medis,non-medis',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $position = Position::find($id);
        if ($position) {
            $position->update($request->only([
                'position_name',
                'base_salary',
                'description',
                'category'
            ]));
            return new ApiResources(true, 'Data position berhasil diubah.', $position);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data position tidak ditemukan.'
        ], 404);
    }

    public function Destroy($id)
    {
        $position = Position::find($id);
        if ($position) {
            $position->delete();
            return new ApiResources(true, 'Data position berhasil dihapus.', $position);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data position tidak ditemukan.'
        ], 404);
    }
}
