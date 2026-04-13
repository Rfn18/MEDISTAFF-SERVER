<?php

namespace Database\Seeders;

use App\Models\Shift;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Shift::create([
            'shift_name' => 'Pagi',
            'start_time' => '07:00:00',
            'end_time' => '15:00:00',
            'description' => 'Shift pagi untuk pelayanan utama'
        ]);

        Shift::create([
            'shift_name' => 'Sore',
            'start_time' => '15:00:00',
            'end_time' => '23:00:00',
            'description' => 'Shift sore untuk pelayanan lanjutan'
        ]);

        Shift::create([
            'shift_name' => 'Malam',
            'start_time' => '23:00:00',
            'end_time' => '07:00:00',
            'description' => 'Shift malam untuk pelayanan 24 jam'
        ]);
    }
}
