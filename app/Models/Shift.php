<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\ShiftSchedule;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Shift extends Model
{
    use HasFactory;
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
