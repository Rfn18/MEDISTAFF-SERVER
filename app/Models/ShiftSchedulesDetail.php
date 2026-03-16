<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Shift;
use App\Models\ShiftSchedule;
class ShiftSchedulesDetail extends Model
{
    protected $table = 'shift_schedules_details';
    protected $fillable = [
        'employee_id',
        'departement_id',
        'shift_id',
        'shift_schedule_id',
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class, 'employee_id', 'id');
    }

    public function departement(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'departement_id', 'id');
    }

    public function shift(): BelongsTo
    {
        return $this->belongsTo(Shift::class, 'shift_id', 'id');
    }

    public function shiftSchedule(): BelongsTo
    {
        return $this->belongsTo(ShiftSchedule::class, 'shift_schedule_id', 'id');
    }
}
