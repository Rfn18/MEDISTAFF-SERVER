<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserManageController extends Controller
{
    public function Index()
    {
        $users = User::with('employee')->paginate(10);
        if ($users->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        $users->load('role');
        return new ApiResources(true, 'List data users.', $users);
    }

    public function Store(Request $request)
    {

        $role = Role::find($request->role_id);

        if (!$role) {
            return response()->json([
                'status' => false,
                'message' => 'Role tidak ditemukan'
            ], 404);
        }

        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'is_active' => 'sometimes|boolean',
            'role_id' => 'required|integer|exists:roles,id',
        ];

        if ($role->is_admin) {
            $rules['employee_id'] = 'nullable';
        } else {
            $rules['employee_id'] = 'required|integer|exists:employees,id';
        }

        $validate = Validator::make($request->all(), $rules);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_active' => $request->has('is_active') ? (bool) $request->is_active : true,
            'role_id' => $request->role_id,
            'employee_id' => $request->employee_id,
            'device_id' => null,
        ]);

        return new ApiResources(true, 'Data user berhasil ditambahkan.', $user);
    }

    public function Show($id)
    {
        $user = User::with('employee')->where('id', $id)->first();
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Data user tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data user.', $user);
    }

    public function Update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'sometimes|string|max:255',
            'email' => 'sometimes|email|max:255|unique:users,email,' . $id,
            'password' => 'sometimes|string|min:8',
            'is_active' => 'sometimes|boolean',
            'role_id' => 'sometimes|integer|exists:roles,id',
            'employee_id' => 'sometimes|integer|exists:employees,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $user = User::where('id', $id)->first();
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'Data user tidak ditemukan.'
            ], 404);
        }

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'is_active' => $request->is_active,
            'role_id' => $request->role_id,
            'employee_id' => $request->employee_id,
            'device_id' => $user->device_id,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return new ApiResources(true, 'Data user berhasil diubah.', $user);
    }

    public function Destroy($id)
    {
        $user = User::where('id', $id)->delete();
        return new ApiResources(true, 'Data user berhasil dihapus.', $user);
    }
}
