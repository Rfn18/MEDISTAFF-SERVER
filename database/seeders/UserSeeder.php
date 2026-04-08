<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin Utama',
                'email' => 'admin@example.com',
                'password' => Hash::make('password123'),
                'is_active' => true,
                'last_login_at' => now(),
                'employee_id' => 1, 
                'role_id' => 2,  
                'device_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}