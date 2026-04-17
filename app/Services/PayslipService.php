<?php

namespace App\Services;
use App\Models\Payroll;
use Barryvdh\DomPDF\Facade\Pdf;

class PayslipService
{
     public function generate_payroll(Payroll $payroll) {
        $payroll->load(['employee.position', 'payrollDetails']);

        $data = [
            'payroll' => $payroll,
            'employee' => $payroll->employee,
            'allowances' => $payroll->payrollDetails->where('type', 'allowance'),
            'deductions' => $payroll->payrollDetails->where('type', 'deduction'),
            'period' => $this->formatPeriod($payroll->month, $payroll->year),
        ];

        $pdf = Pdf::loadView('payslip.template', $data);

        $fileName = 'payslip-' . $payroll->employee->full_name . '-' . $this->formatPeriod($payroll->month, $payroll->year) . '.pdf';
        $path = public_path('payslip/' . $fileName);

        if (!file_exists(public_path('payslip'))) {
            mkdir(public_path('payslip'), 0777, true);
        }

        $pdf->save($path);
        return $fileName;
    }

    private function formatPeriod(int $month, int $year): string
    {
        $months = [
            1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 
            4 => 'April', 5 => 'Mei', 6 => 'Juni',
            7 => 'Juli', 8 => 'Agustus', 9 => 'September',
            10 => 'Oktober', 11 => 'November', 12 => 'Desember'
        ];
        return $months[$month] . ' ' . $year;
    }
}