<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Model;
use App\Models\Shift;
use App\Models\ShiftSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ShiftSchedulesDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shift_schedule_id' => ShiftSchedule::factory(),
            'shift_id' => Shift::factory(),
            'departement_id' => Department::factory(),
            'employee_id' => Employee::factory(),
        ];
    }
}
