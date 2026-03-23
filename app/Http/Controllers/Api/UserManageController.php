<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
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

        return new ApiResources(true, 'List data users.', $users);
    }

    public function Store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|string|min:8',
            'is_active' => 'sometimes|boolean',
            'employee_id' => 'required|integer|exists:employees,id',
            'role_id' => 'required|integer|exists:roles,id',
        ]);

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

        $data = $request->only([
            'name',
            'email',
            'is_active',
            'role_id',
            'employee_id',
        ]);

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user = User::where('id', $id)->update($data);

        return new ApiResources(true, 'Data user berhasil diubah.', $user);
    }

    public function Destroy($id)
    {
        $user = User::where('id', $id)->delete();
        return new ApiResources(true, 'Data user berhasil dihapus.', $user);
    }
}
