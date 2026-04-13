<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RoleController extends Controller
{
    public function Index() {   
        $role = Role::paginate(10);
        if ($role->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data role.', $role);
    }

    public function Store(Request $request) {
        $validate = Validator::make($request->all(), [
            'role_name' => 'required|string',
            'description' => 'sometimes|string|max:255',
            'is_admin' => 'required|boolean'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $role = Role::create($request->only([
            'role_name',
            'description',
            'is_admin'
        ]));

        return new ApiResources(true, 'Data role berhasil ditambahkan.', $role);
    }

    public function Show($id) {
        $role = Role::where('id', $id)->first();
        if ($role->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data role tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data role.', $role);
    }   

    public function Update(Request $request, $id) {
        $validate = Validator::make($request->all(), [
            'role_name' => 'sometimes|string',
            'description' => 'sometimes|string|max:255',
            'is_admin' => 'sometimes|boolean'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        };

        $role = Role::find($id);
        if ($role) {
            $role->update($request->only([
                'role_name',
                'description',
                'is_admin'
            ]));
            return new ApiResources(true, 'Data role berhasil diubah.', $role);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data role tidak ditemukan.'
        ], 404);
    }

    public function Destroy($id) {
        $role = Role::find($id);
        if ($role) {
            $role->delete();
            return new ApiResources(true, 'Data role berhasil dihapus.', $role);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data role tidak ditemukan.'
        ], 404);
    }
}
