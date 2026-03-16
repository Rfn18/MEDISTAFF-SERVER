<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ShiftSchedulesDetail;
class ShiftSchedule extends Model
{
    protected $table = 'shift_schedules';
    protected $fillable = [
        'schedule_date',
        'created_by',
        'updated_by',
    ];

    public function shiftSchedulesDetails(): HasMany
    {
        return $this->hasMany(ShiftSchedulesDetail::class, 'shift_schedule_id', 'id');
    }
}
