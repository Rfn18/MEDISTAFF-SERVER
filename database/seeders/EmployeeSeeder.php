<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class EmployeeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'nip' => 'EMP001',
                'nik' => '3201010101010001',
                'full_name' => 'Fasterino',
                'gender' => 'male',
                'birth_place' => 'Jakarta',
                'birth_date' => '1995-05-10',
                'address' => 'Jl. Merdeka No.1',
                'phone_number' => '081234567890',
                'email' => 'faster@gmail.com',
                'photo' => null,
                'hire_date' => Carbon::now()->subYears(2),
                'employee_status' => 'active',
                'position_id' => 1,
                'department_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nip' => 'EMP002',
                'nik' => '3201010101010002',
                'full_name' => 'Siti Aisyah',
                'gender' => 'female',
                'birth_place' => 'Bandung',
                'birth_date' => '1998-08-15',
                'address' => 'Jl. Asia Afrika',
                'phone_number' => '081298765432',
                'email' => 'siti@example.com',
                'photo' => null,
                'hire_date' => Carbon::now()->subYear(),
                'employee_status' => 'active',
                'position_id' => 1,
                'department_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}