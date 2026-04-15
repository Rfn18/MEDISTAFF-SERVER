<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model
{
    use HasFactory;
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nip',
        'nik',
        'full_name',
        'gender',
        'birth_place',
        'birth_date',
        'address',
        'phone_number',
        'email',
        'photo',
        'hire_date',
        'employee_status',
        'position_id',
        'department_id',
    ];

    public function user(): HasMany
    {
        return $this->hasMany(User::class, 'employee_id', 'id');
    }

    public function position(): BelongsTo
    {
        return $this->belongsTo(Position::class, 'position_id', 'id');
    }

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function shiftSchedulesDetails(): HasMany
    {
        return $this->hasMany(ShiftSchedulesDetail::class, 'employee_id', 'id');
    }

    public function leaveRequests(): HasMany
    {
        return $this->hasMany(LeaveRequest::class, 'employee_id', 'id');
    }

    public function payrolls(): HasMany
    {
        return $this->hasMany(Payroll::class, 'employee_id', 'id');
    }

    public function paySlips(): HasMany
    {
        return $this->hasMany(PaySlip::class, 'employee_id', 'id');
    }

    public function attendances(): HasMany
    {
        return $this->hasMany(Attendance::class, 'employee_id', 'id');
    }

    public function attendancesSumary(): HasMany
    {
        return $this->hasMany(AttendanceSumary::class, 'employee_id', 'id');
    }
}
