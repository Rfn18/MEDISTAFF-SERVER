<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Payroll;


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

    public function show($id) {
        $payslip = Payslip::with(['payroll', 'payroll.employee'])->find($id);
        if (!$payslip) {
            return response()->json([
                'status' => false,
                'message' => 'Data tidak ditemukan.'
            ], 404);
        }

        return new ApiResources(true, 'Data payslip.', $payslip);
    }
}
