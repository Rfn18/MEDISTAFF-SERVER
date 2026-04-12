<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ShiftScheduleSeeder extends Seeder
{
    public function run(): void
    {
        $employees = DB::table('employees')->get();
        $shifts = DB::table('shifts')->pluck('id')->toArray();

        $startDate = Carbon::now()->startOfMonth();
        $endDate = Carbon::now()->endOfMonth();

        for ($date = $startDate; $date->lte($endDate); $date->addDay()) {

            $scheduleId = DB::table('shift_schedules')->insertGetId([
                'schedule_date' => $date->format('Y-m-d'),
                'created_by' => 1,
                'updated_by' => 1,
                'departement_id' => 1, 
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            $details = [];

            foreach ($employees as $employee) {

                $isOff = $date->isSunday();

                $details[] = [
                    'employee_id' => $employee->id,
                    'shift_id' => $isOff ? null : $shifts[array_rand($shifts)],
                    'shift_schedule_id' => $scheduleId,
                    'schedule_date' => $date->format('Y-m-d'),
                    'is_off' => $isOff,
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }

            DB::table('shift_schedule_details')->insert($details);
        }
    }
}