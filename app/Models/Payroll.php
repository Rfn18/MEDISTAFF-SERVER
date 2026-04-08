<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Payroll extends Model
{
    protected $table = 'payrolls';
    protected $fillable = [
        'employee_id',
        'month',
        'year',
        'base_salary',
        'total_allowance',
        'overtime_pay',
        'late_pay',
        'absent_pay',
        'total_deduction',
        'total_salary',
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function payrollDetails(): HasMany
    {
        return $this->hasMany(PayrollDetail::class, 'payroll_id', 'id');
    }


    public function allowanceDetails()
    {
        return $this->hasMany(PayrollDetail::class, 'payroll_id')->where('type', 'allowance');
    }

    public function deductionDetails()
{
    return $this->hasMany(PayrollDetail::class, 'payroll_id')->where('type', 'deduction');
}

    public function paySlips(): HasMany
    {
        return $this->hasMany(PaySlip::class, 'payroll_id', 'id');
    }
}
