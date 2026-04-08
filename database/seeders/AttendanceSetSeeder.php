
<?php

use App\Models\AttendanceSetting;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AttendancesetSeeder extends Seeder
{
    public function run(): void
    {
        AttendanceSetting::create([
            'office_name' => 'Kantor Pusat Jakarta',
            'latitude' => -6.175392, 
            'longitude' => 106.827153,
            'radius_meters' => 100, 
            'created_at' => now(),
        ]);
    }
}