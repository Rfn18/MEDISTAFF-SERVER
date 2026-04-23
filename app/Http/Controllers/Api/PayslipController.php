<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Payroll;
use App\Models\Payslip;
use App\Http\Resources\ApiResources;

class PayslipController extends Controller
{
    public function index() {
        $payslip = Payslip::with(['payroll', 'payroll.employee'])->paginate(10);
        if ($payslip->isEmpty()) {
            return response()->json([
                'status' => false,
                'message' => 'Data masih kosong.'
            ], 404);
        }

        return new ApiResources(true, 'List data payslip.', $payslip);
    }

    public function showByPayrollId(Request $request) {
        if ($request->payroll_id == null) {
            return response()->json([
                'status' => false,
                'message' => 'Payroll ID tidak ditemukan.'
            ], 404);
        }

        $payslip = Payslip::with(['payroll', 'payroll.employee'])->where('payroll_id', $request->payroll_id)->first();
        if (!$payslip) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Data payslip.', $payslip);
    }
}
