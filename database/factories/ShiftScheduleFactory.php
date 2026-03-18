<?php

namespace Database\Factories;

use App\Models\ShiftSchedule;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<ShiftSchedule>
 */
class ShiftScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'schedule_date' => $this->faker->date(),
            'created_by' => $this->faker->name(),
            'updated_by' => $this->faker->name(),
        ];
    }
}
