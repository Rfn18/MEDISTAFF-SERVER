<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PayrollDetail extends Model
{
    protected $table = 'payroll_details';
    protected $fillable = [
        'allowance_id',
        'payroll_id',
        'amount',
    ];

    public function allowance(): BelongsTo
    {
        return $this->belongsTo(Allowance::class, 'allowance_id', 'id');
    }

    public function payroll(): BelongsTo
    {
        return $this->belongsTo(Payroll::class, 'payroll_id', 'id');
    }
}
