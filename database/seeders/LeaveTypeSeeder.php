<?php

namespace Database\Seeders;

use App\Models\LeaveType;
use Illuminate\Database\Seeder;

class LeaveTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        LeaveType::create([
            'leave_type_name' => "sick",
            'max_days' => '30',
        ]);

        LeaveType::create([
            'leave_type_name' => "Marriage",
            'max_days' => '2',
        ]);

        LeaveType::create([
            'leave_type_name' => "Maternity and Paternity",
            'max_days' => '90',
        ]);

        LeaveType::create([
            'leave_type_name' => "Bereavement ",
            'max_days' => '90',
        ]);
    }
}
