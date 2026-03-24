<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendanceSetting extends Model
{
    protected $table = 'attendance_settings';

    protected $fillable = ['office_name', 'latitude', 'longitude', 'radius_meters'];
}
