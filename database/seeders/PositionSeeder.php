<?php

namespace Database\Seeders;

use App\Models\Position;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PositionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Position::create([
            'position_name' => 'Perawat',
            'base_salary' => 10000000,
            'description' => 'Jabatan Perawat'
        ]);
        Position::create([
            'position_name' => 'Dokter',
            'base_salary' => 8000000,
            'description' => 'Jabatan Dokter'
        ]);
        Position::create([
            'position_name' => 'Spesialis',
            'base_salary' => 6000000,
            'description' => 'Jabatan Spesialis'
        ]);
        Position::create([
            'position_name' => 'Ahli',
            'base_salary' => 4000000,
            'description' => 'Jabatan Ahli'
        ]);
        Position::create([
            'position_name' => 'HRD',
            'base_salary' => 5000000,
            'description' => 'Jabatan HRD'
        ]);
    }
}
