<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class EmployeeController extends Controller
{
    public function Index()
    {
        $employee = Employee::with(['position', 'department'])->paginate(10);
        if ($employee->isEmpty()) {
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
            'gender' => 'required|string|in:male,female',
            'birth_place' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'address' => 'required|string',
            'phone_number' => 'required|string|max:20',
            'email' => 'required|email|max:255',
            'photo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hire_date' => 'required|date',
            'position_id' => 'required|integer|exists:positions,id',
            'department_id' => 'required|integer|exists:departments,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        $data = $request->all();
        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $photoName = time() . '.' . Str::slug($request->full_name) . '.' . $photo->getClientOriginalExtension();
            $path = $photo->storeAs('employee', $photoName, 'public');
            $data['photo'] = $path;  
        }   

        $data['employee_status'] = 'active';
        $employee = Employee::create($data);

        return new ApiResources(true, 'Data employee berhasil ditambahkan.', $employee);
    }

    

    public function Update(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'nip' => 'sometimes|string|max:50',
            'nik' => 'sometimes|string|max:50',
            'full_name' => 'sometimes|string|max:255',
            'gender' => 'sometimes|string|in:male,female',
            'birth_place' => 'sometimes|string|max:255',
            'birth_date' => 'sometimes|date',
            'address' => 'sometimes|string',
            'phone_number' => 'sometimes|string|max:20',
            'email' => 'sometimes|email|max:255',
            'photo' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'hire_date' => 'sometimes|date',
            'employee_status' => 'sometimes|string|max:50',
            'position_id' => 'sometimes|integer|exists:positions,id',
            'department_id' => 'sometimes|integer|exists:departments,id',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        $employee = Employee::find($id);
        if (!$employee) {
            return response()->json([
                'status' => false,
                'message' => 'Data employee tidak ditemukan.'
            ], 404);
        }

        $data = $request->all();

        if ($request->hasFile('photo')) {
            if ($employee->photo) {
                Storage::disk('public')->delete($employee->photo);
            }
            $photo = $request->file('photo');
            $name = $request->full_name ?? $employee->full_name;
            $photoName = time().'_'.Str::slug($name).'.'.$photo->getClientOriginalExtension();
            $path = $photo->storeAs('employee', $photoName, 'public');
            $data['photo'] = $path;
        }

        $employee->update($data);
        return new ApiResources(true, 'Data employee berhasil diubah.', $employee);
    }

    public function UpdateStatus(Request $request, $id)
    {
        $validate = Validator::make($request->all(), [
            'employee_status' => 'required|string|in:active,inactive,terminated,resigned,on_leave'
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 422);
        }

        $employee = Employee::find($id);
        if (!$employee) {
            return response()->json([
                'status' => false,
                'message' => 'Data employee tidak ditemukan.'
            ], 404);
        }

        $employee->update($request->only(['employee_status']));
        return new ApiResources(true, 'Status employee berhasil diubah.', $employee);
    }

    public function Show($id)
    {
        $employee = Employee::with(['position', 'department'])->where('id', $id)->first();
        if (!$employee) {
            return response()->json([
                'status' => false,
                'message' => 'Data employee tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data employee.', $employee);
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

    public function getEmployeeByDepartment($id)
    {
        $employee = Employee::with(['position', 'department'])->where('department_id', $id)->get();
        if ($employee->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data employee.', $employee);
    }

    public function getEmployeeMedis()
    {
        $employee = Employee::with('position')->whereHas('position', function ($query) {
            $query->where('category', 'medis');
        })->get();
        
        if ($employee->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data employee medis.', $employee);
    }

    public function getEmployeeNonMedis()
    {
        $employee = Employee::with(['position', 'department'])->whereHas('position', function ($query) {
            $query->where('category', 'non-medis');
        })->get();
        if ($employee->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data employee non-medis.', $employee);
    }
}
