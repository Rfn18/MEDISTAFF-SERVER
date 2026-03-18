<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ShiftSchedulesDetail;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ShiftSchedule extends Model
{
    use HasFactory ;
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
