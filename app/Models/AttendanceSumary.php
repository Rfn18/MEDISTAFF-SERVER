<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AttendanceSumary extends Model
{
    protected $table = 'attendance_sumaries';
    protected $fillable = [
        'employee_id',
        'month',
        'year',
        'total_present',
        'total_sick',
        'total_absent',
        'total_late',
        'total_off'
    ];      

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }
}
