<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ApiResources;
use App\Models\Employee;
use App\Models\Payroll;
use App\Models\PayrollDetail;
use App\Models\PaySlip;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

use function Pest\Laravel\call;

class PayrollController extends Controller
{
    public function index() {
        $payroll = Payroll::with(['employee', 'payrollDetails', 'paySlips'])->paginate(10);
        if ($payroll->count() === 0) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data payroll.', $payroll);
    }

    public function payroll(Request $request) {
        $validate = Validator::make($request->all(), [
            'employee_id' => 'required|exists:employees,id',
            'month' => 'required|integer|min:1|max:12',
            'year' => 'required|integer|min:2000|max:2100',
            'base_salary' => 'required|numeric',
        ]);

        if ($validate->fails()) {
            return response()->json([
                'status' => false,
                'message' => $validate->errors()
            ], 400);
        }
    
        if (Payroll::where('employee_id', $request->employee_id)->where('month', $request->month)->exists()) {
            return response()->json([
                'success' => false,
                'message' => 'Payroll pada bulan tersebut sudah ada.',
                'data' => null
            ], 422);
        }

       $payroll = Payroll::create([
            'employee_id' => $request->employee_id,
            'month' => $request->month,
            
            'year' => $request->year,
            'base_salary' => $request->base_salary,
            'total_allowance' => 0,
            'total_deduction' => 0,
            'overtime_pay' => 0,
            'total_salary' => $request->base_salary,
        ]);

      return new ApiResources(true, 'Data payroll berhasil ditambahkan.', $payroll);
    }

    // public function payrollDetail(Request $request) {
    //     $validate = Validator::make($request->all(), [
    //         'payroll_id' => 'required|exists:payroll,id',
    //         'allowance_id' => 'required|exists:allowance,id',
    //         'amount' => 'required|integer|min:1|max:12'
    //     ]);

    //     if ($validate->fails()) {
    //         return response()->json([
    //             'status' => false,
    //             'message' => $validate->errors()
    //         ], 422);
    //     }

    //     DB::beginTransaction();

    //     try {
            
    //     }
    // }

    public function show($id) {
        $payroll = Payroll::where('id', $id)->first();
        if (!$payroll) {
            return response()->json([
                'status' => false,
                'message' => 'Data payroll tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Detail data payroll.', $payroll);
    }
}
