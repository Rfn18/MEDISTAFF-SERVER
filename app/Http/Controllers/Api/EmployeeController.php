<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EmployeeController extends Controller
{
    public function Index()
    {
        $employee = Employee::with(['position', 'department'])->paginate(10);
        if ($employee->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data employee.', $employee);
    }

    public function Store(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'nip' => 'required|string|max:50',
            'nik' => 'required|string|max:50',
            'full_name' => 'required|string|max:255',
            'gender' => 'required|string|in:L,P',
            'birth_place' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'address' => 'required|string',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'hire_date' => 'required|date',
            'employee_status' => 'required|string|max:50',
            'position_id' => 'required|integer|exists:positions,id',
            'department_id' => 'required|integer|exists:departments,id',
            'role_id' => 'required|integer|exists:roles,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $employee = Employee::create($request->only([
            'nip',
            'nik',
            'full_name',
            'gender',
            'birth_place',
            'birth_date',
            'address',
            'phone_number',
            'email',
            'hire_date',
            'employee_status',
            'position_id',
            'department_id',
            'role_id',
        ]));

        return new ApiResources(true, 'Data employee berhasil ditambahkan.', $employee);
    }

    public function Show($id)
    {
        $employee = Employee::with(['position', 'department'])->where('id', $id)->first();
        if ($employee->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data employee tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data employee.', $employee);
    }

    public function Update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'nip' => 'sometimes|string|max:50',
            'nik' => 'sometimes|string|max:50',
            'full_name' => 'sometimes|string|max:255',
            'gender' => 'sometimes|string|in:L,P',
            'birth_place' => 'sometimes|string|max:255',
            'birth_date' => 'sometimes|date',
            'address' => 'sometimes|string',
            'phone_number' => 'sometimes|string|max:20',
            'email' => 'sometimes|email|max:255',
            'hire_date' => 'sometimes|date',
            'employee_status' => 'sometimes|string|max:50',
            'position_id' => 'sometimes|integer|exists:positions,id',
            'department_id' => 'sometimes|integer|exists:departments,id',
            'role_id' => 'sometimes|integer|exists:roles,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }

        $employee = Employee::find($id);
        if ($employee) {
            $employee->update($request->only([
            'nip',
            'nik',
            'full_name',
            'gender',
            'birth_place',
            'birth_date',
            'address',
            'phone_number',
            'email',
            'hire_date',
            'employee_status',
            'position_id',
            'department_id',
            'role_id',
            ]));
            return new ApiResources(true, 'Data employee berhasil diubah.', $employee);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data employee tidak ditemukan.'
        ], 404);
    }

    public function Destroy($id)
    {
        $employee = Employee::find($id);
        if ($employee) {
            $employee->delete();
            return new ApiResources(true, 'Data employee berhasil dihapus.', $employee);
        }

        return response()->json([
            'status' => false,
            'message' => 'Data employee tidak ditemukan.'
        ], 404);
    }
}
