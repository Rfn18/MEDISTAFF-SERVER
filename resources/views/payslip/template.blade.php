<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Payslip - {{ $employee->full_name }}</title>
    <style>
        body { 
            font-family: Arial, sans-serif; 
            font-size: 12px; 
        }
        .header { 
            text-align: center; 
            margin-bottom: 20px; 
        }
        .company-name { 
            font-size: 18px; 
            font-weight: bold; 
        }
        .title { 
            font-size: 16px; 
            margin-top: 5px; 
        }
        .info-table { 
            width: 100%; 
            margin-bottom: 15px; 
        }
        .info-table td { 
            padding: 3px 0; 
        }
        .salary-table { 
            width: 100%; 
            border-collapse: collapse; 
            margin-bottom: 15px; 
        }
        .salary-table th, .salary-table td { 
            border: 1px solid #333; 
            padding: 8px; 
            text-align: left; 
        }
        .salary-table th { 
            background-color: #f0f0f0; 
        }
        .text-right { 
            text-align: right; 
        }
        .total-row { 
            font-weight: bold; 
            background-color: #e8e8e8; 
        }
        .signature { 
            margin-top: 40px; 
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="company-name">PT. Medistaff Hartono</div>
        <div class="title">SLIP GAJI KARYAWAN</div>
        <div>Periode: {{ $period }}</div>
    </div>

    <table class="info-table">
        <tr>
            <td width="120">Nama Karyawan</td>
            <td>: {{ $employee->full_name }}</td>
            <td width="120">NIK</td>
            <td>: {{ $employee->nik ?? '-' }}</td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>: {{ $employee->position->name ?? '-' }}</td>
            <td>Departemen</td>
            <td>: {{ $employee->position->department ?? '-' }}</td>
        </tr>
    </table>

    <table class="salary-table">
        <thead>
            <tr>
                <th colspan="2">PENDAPATAN</th>
                <th colspan="2">POTONGAN</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Gaji Pokok</td>
                <td class="text-right">{{ number_format($payroll->base_salary, 0, ',', '.') }}</td>
                <td>Potongan Absen</td>
                <td class="text-right">{{ number_format($payroll->absent_pay, 0, ',', '.') }}</td>
            </tr>
            <tr>
                <td>Lembur</td>
                <td class="text-right">{{ number_format($payroll->overtime_pay, 0, ',', '.') }}</td>
                <td>Potongan Terlambat</td>
                <td class="text-right">{{ number_format($payroll->late_pay, 0, ',', '.') }}</td>
            </tr>
            @foreach($allowances as $index => $allowance)
            <tr>
                <td>{{ $allowance->name }}</td>
                <td class="text-right">{{ number_format($allowance->amount, 0, ',', '.') }}</td>
                @if($deductions->values()->get($index))
                    <td>{{ $deductions->values()->get($index)->name }}</td>
                    <td class="text-right">{{ number_format($deductions->values()->get($index)->amount, 0, ',', '.') }}</td>
                @else
                    <td></td><td></td>
                @endif
            </tr>
            @endforeach
            @for($i = $allowances->count(); $i < $deductions->count(); $i++)
            <tr>
                <td></td><td></td>
                <td>{{ $deductions->values()->get($i)->name }}</td>
                <td class="text-right">{{ number_format($deductions->values()->get($i)->amount, 0, ',', '.') }}</td>
            </tr>
            @endfor
            <tr class="total-row">
                <td>Total Pendapatan</td>
                <td class="text-right">{{ number_format($payroll->base_salary + $payroll->overtime_pay + $payroll->total_allowance, 0, ',', '.') }}</td>
                <td>Total Potongan</td>
                <td class="text-right">{{ number_format($payroll->total_deduction + $payroll->absent_pay + $payroll->late_pay, 0, ',', '.') }}</td>
            </tr>
        </tbody>
    </table>

    <table class="salary-table">
        <tr class="total-row">
            <td>GAJI BERSIH (Take Home Pay)</td>
            <td class="text-right">Rp {{ number_format($payroll->total_salary, 0, ',', '.') }}</td>
        </tr>
    </table>

    <div class="signature">
        <table width="100%">
            <tr>
                <td width="50%" style="text-align: center;">
                    <p>Diterima oleh,</p>
                    <br><br><br>
                    <p>( {{ $employee->full_name }} )</p>
                </td>
                <td width="50%" style="text-align: center;">
                    <p>Disetujui oleh,</p>
                    <br><br><br>
                    <p>( HRD Manager )</p>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>