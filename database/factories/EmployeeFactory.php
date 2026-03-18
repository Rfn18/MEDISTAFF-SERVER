<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\Employee;
use App\Models\Position;
use App\Models\Role;
use App\Models\Shift;
use App\Models\ShiftSchedule;
use App\Models\ShiftSchedulesDetail;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nip' => $this->faker->unique()->numerify('EMP###'),
            'nik' => $this->faker->unique()->numerify('################'),
            'full_name' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'birth_place' => $this->faker->city(),
            'birth_date' => $this->faker->date(),
            'address' => $this->faker->address(),
            'phone_number' => $this->faker->phoneNumber(),
            'email' => $this->faker->unique()->safeEmail(),
            'photo' => null,
            'hire_date' => now(),
            'employee_status' => 'active',

            'position_id' => Position::factory(),
            'department_id' => Department::factory(),
            'role_id' => Role::factory(),
            'user_id' => null,
        ];
    }
    public function withShiftScheduleForToday()
    {
        return $this->has(
            ShiftSchedulesDetail::factory()->forShift(
                Shift::factory(['start_time' => '08:00:00', 'end_time' => '16:00:00'])
            )->forShiftSchedule(
                ShiftSchedule::factory(['schedule_date' => now()->toDateString()])
            ),
            'shiftSchedulesDetails'
        );
    }
};

