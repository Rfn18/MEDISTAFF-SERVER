<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Role extends Model
{
    use HasFactory;
    protected $table = 'roles';
    protected $fillable = [
        'role_name',
        'description',
        'is_admin'
    ];

    public function User(): HasMany
    {
        return $this->hasMany(User::class, 'role_id', 'id');
    }

    public function Permission(): HasMany
    {
        return $this->hasMany(Permission::class, 'role_id', 'id');
    }
    public function RolePermissions(): HasMany
    {
        return $this->hasMany(RolePermission::class, 'role_id', 'id');
    }
}
