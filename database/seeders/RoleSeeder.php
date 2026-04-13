<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::create([
            'role_name' => 'Super Admin',
            'description' => 'Mengelola seluruh data rumah sakit.',
            'is_admin' => true,
        ]);
        Role::create([
            'role_name' => 'HR Admin',
            'description' => 'Mengelola data karyawan dan data kepegawaian Rumah Sakit.',
            'is_admin' => true,
        ]);
        Role::create([
            'role_name' => 'Staff',
            'description' => 'Mengelola data kehadiran dan data absensi pribadi karyawan.'
        ]);
    }
}
