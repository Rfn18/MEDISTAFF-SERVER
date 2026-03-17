<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Deduction extends Model
{
    protected $table = 'deductions';

    protected $fillable = [
        'deduction_name',
        'amount',
        'description',
    ];  

    public function payrollDetails(): HasMany
    {
        return $this->hasMany(PayrollDetail::class, 'deduction_id', 'id');
    }
}
