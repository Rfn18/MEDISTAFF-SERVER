<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Permission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PermissionController extends Controller
{
    public function index() {
        $permissions = Permission::paginate(10);
        if ($permissions->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data permission.', $permissions);
    }

    public function store(Request $request) {
        $validate = Validator::make($request->all(), [
            'slug' => 'required|string',
            'name' => 'required|string',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $permission = Permission::create($request->only([
            'slug',
            'name'
        ]));

        return new ApiResources(true, 'Data permission berhasil ditambahkan.', $permission);
    }

    public function show($id) {
        $permission = Permission::find($id);
        if ($permission) {
            return new ApiResources(true, 'Data permission.', $permission);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data permission tidak ditemukan.'
        ], 404);
    }

    public function update(Request $request, $id) {
        $validate = Validator::make($request->all(), [
            'slug' => 'sometimes|string',
            'name' => 'sometimes|string',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $permission = Permission::find($id);
        if ($permission) {
            $permission->update($request->only([
                'slug',
                'name'
            ]));
            return new ApiResources(true, 'Data permission berhasil diubah.', $permission);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data permission tidak ditemukan.'
        ], 404);
    }

    public function destroy($id) {
        $permission = Permission::find($id);
        if ($permission) {
            $permission->delete();
            return new ApiResources(true, 'Data permission berhasil dihapus.', $permission);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data permission tidak ditemukan.'
        ], 404);
    }
}
