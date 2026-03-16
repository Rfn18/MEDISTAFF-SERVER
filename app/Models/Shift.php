<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ShiftSchedule;
class Shift extends Model
{
    protected $table = 'shifts';
    protected $fillable = [
        'shift_name',
        'start_time',
        'end_time',
        'description',
    ];

    public function shiftSchedules(): HasMany
    {
        return $this->hasMany(ShiftSchedule::class, 'shift_id', 'id');
    }
}
