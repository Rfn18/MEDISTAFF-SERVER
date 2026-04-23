<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScheduleReminder extends Model
{
    protected $fillable = [
        'days_before',
        'time',
        'message',
        'updated_by',
        'is_active',
    ];
}
