<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Department::create([
            'department_name' => 'Rawat Inap',
            'location' => 'Lantai 1',
            'description' => 'Pelayanan Rawat Inap Rumah Sakit'
        ]);
        Department::create([
            'department_name' => 'Rawat Jalan',
            'location' => 'Lantai 2',
            'description' => 'Pelayanan Rawat Jalan Rumah Sakit'
        ]);
        Department::create([
            'department_name' => 'Radiologi',
            'location' => 'Lantai 3',
            'description' => 'Pelayanan Radiologi Rumah Sakit'
        ]);
        Department::create([
            'department_name' => 'Laboratorium',
            'location' => 'Lantai 4',
            'description' => 'Pelayanan Laboratorium Rumah Sakit'
        ]);
        Department::create([
            'department_name' => 'Farmasi',
            'location' => 'Lantai 5',
            'description' => 'Pelayanan Farmasi Rumah Sakit'
        ]);
    }
}
