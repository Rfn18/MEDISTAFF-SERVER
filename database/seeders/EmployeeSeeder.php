<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        $employees = [];

        for ($i = 1; $i <= 20; $i++) {
            $employees[] = [
                'nip' => 'EMP' . str_pad($i, 5, '0', STR_PAD_LEFT),
                'nik' => '3201' . rand(100000000000, 999999999999),
                'full_name' => fake()->name(),
                'gender' => fake()->randomElement(['male', 'female']),
                'birth_place' => fake()->city(),
                'birth_date' => fake()->date('Y-m-d', '2000-01-01'),
                'address' => fake()->address(),
                'phone_number' => fake()->phoneNumber(),
                'email' => fake()->unique()->safeEmail(),
                'photo' => null,
                'hire_date' => fake()->date('Y-m-d'),
                'employee_status' => fake()->randomElement(['active', 'inactive']),
                'position_id' => rand(1, 5), 
                'department_id' => rand(1, 5), 
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('employees')->insert($employees);
    }
}