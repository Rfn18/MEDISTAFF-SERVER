<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApiResources;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{

    public function login(Request $request) {
        $validate = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response()->json([
                'status' => false,
                'message' => 'Email atau password tidak valid.'
            ], 404);
        }
        
        $user->update([
            'last_login_at' => Carbon::now(),
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;
        return new ApiResources(true, 'User berhasil login.', [
            'user' => $user,
            'token' => $token,
        ]);
    }

    public function register(Request $request) {
        $validate = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'last_login_at' => 'nullable|dateTime',
            'employee_id' => 'required|integer|exists:employees,id',
            'password' => 'required|string|min:8',
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
            'employee_id' => $request->employee_id,
            'is_active' => true,
        ]);
        
        return new ApiResources(true, 'User created successfully', $user);
    }

    public function logout(Request $request) {
        $user = $request->user();
        if (!$user) {
            return response()->json([
                'status' => false,
                'message' => 'User tidak ditemukan.'
            ], 404);
        }
        $user->currentAccessToken()->delete();
        return new ApiResources(true, 'User berhasil logout.', null);
    }

    public function me(Request $request) {
        return new ApiResources(true, 'User detail', [
            'user' => $request->user(),
        ]);
    }
}
