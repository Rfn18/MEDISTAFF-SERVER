<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DepartmentController extends Controller
{
    public function Index()
    {
        $department = Department::paginate(10);
        if ($department->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data department.', $department);
    }

    public function Store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'department_name' => 'required|string',
            'location' => 'sometimes|string|max:255',
            'description' => 'sometimes|string|max:255',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $department = Department::create($request->only([
            'department_name',
            'location',
            'description'
        ]));

        return new ApiResources(true, 'Data department berhasil ditambahkan.', $department);
    }

    public function Show($id)
    {
        $department = Department::where('id', $id)->first();
        if ($department->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data department tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data department.', $department);
    }

    public function Update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'department_name' => 'sometimes|string',
            'location' => 'sometimes|string|max:255',
            'description' => 'sometimes|string|max:255',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $department = Department::find($id);
        if ($department) {
            $department->update($request->only([
                'department_name',
                'location',
                'description'
            ]));
            return new ApiResources(true, 'Data department berhasil diubah.', $department);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data department tidak ditemukan.'
        ], 404);
    }

    public function Destroy($id)
    {
        $department = Department::find($id);
        if ($department) {
            $department->delete();
            return new ApiResources(true, 'Data department berhasil dihapus.', $department);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data department tidak ditemukan.'
        ], 404);
    }
}
