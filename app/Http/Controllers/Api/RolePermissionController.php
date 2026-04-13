<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Role;
use App\Models\Permission;
use App\Models\RolePermission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RolePermissionController extends Controller
{
    public function index() {
        $rolePermissions = Role::with('permissions')->paginate(10);
        if ($rolePermissions->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data role permission.', $rolePermissions);
    }

    public function store(Request $request) {
        $validate = Validator::make($request->all(), [
            'role_id' => 'required|exists:roles,id',
            'permission_id' => 'required|exists:permissions,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $rolePermission = RolePermission::create($request->only([
            'role_id',
            'permission_id'
        ]));

        return new ApiResources(true, 'Data role permission berhasil ditambahkan.', $rolePermission);
    }

    public function update(Request $request, $id) {
        $validate = Validator::make($request->all(), [
            'role_id' => 'sometimes|exists:roles,id',
            'permission_id' => 'sometimes|exists:permissions,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $rolePermission = RolePermission::find($id);
        if ($rolePermission) {
            $rolePermission->update($request->only([
                'role_id',
                'permission_id'
            ]));
            return new ApiResources(true, 'Data role permission berhasil diubah.', $rolePermission);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data role permission tidak ditemukan.'
        ], 404);
    }

    public function show($id) {
        $rolePermission = RolePermission::find($id);
        if ($rolePermission) {
            return new ApiResources(true, 'Data role permission.', $rolePermission);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data role permission tidak ditemukan.'
        ], 404);
    }

    public function destroy($id) {
        $rolePermission = RolePermission::find($id);
        if ($rolePermission) {
            $rolePermission->delete();
            return new ApiResources(true, 'Data role permission berhasil dihapus.', $rolePermission);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data role permission tidak ditemukan.'
        ], 404);
    }
}
