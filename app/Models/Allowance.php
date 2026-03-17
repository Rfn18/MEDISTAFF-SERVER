<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Allowance extends Model
{
    protected $table = 'allowances';
    protected $fillable = [
        'allowance_name',
        'amount',
        'description'
    ];

    public function payrollDetails():HasMany
    {
        return $this->hasMany(PayrollDetail::class, 'allowance_id', 'id');
    }
}
