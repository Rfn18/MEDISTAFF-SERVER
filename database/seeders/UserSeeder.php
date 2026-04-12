<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $employees = DB::table('employees')->get();

        $users = [];

        // DB::table('users')->insert([
        //     'name' => 'Admin',
        //     'email' => 'admin@example.com',
        //     'password' => Hash::make('admin123'),
        //     'is_active' => true,
        //     'last_login_at' => now(),
        //     'employee_id' => null,
        //     'device_id' => null,
        //     'role_id' => 2,
        //     'created_at' => now(),
        //     'updated_at' => now(),
        // ]);

        foreach ($employees as $employee) {
            $users[] = [
                'name' => $employee->full_name,
                'email' => $employee->email,
                'password' => Hash::make('password123'),
                'is_active' => true,
                'last_login_at' => null,
                'employee_id' => $employee->id,
                'device_id' => fake()->uuid(),
                'role_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('users')->insert($users);
    }
}