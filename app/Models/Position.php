<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Position extends Model
{
    use HasFactory;
    protected $table = 'positions';
    protected $fillable = [
        'position_name',
        'base_salary',
        'description',
        'category'
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'position_id', 'id');
    }
}
