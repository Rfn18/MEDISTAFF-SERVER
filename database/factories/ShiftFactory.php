<?php

namespace Database\Factories;

use App\Models\Shift;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Shift>
 */
class ShiftFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shift_name' => $this->faker->randomElement(['Pagi', 'Siang', 'Malam']),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'description' => $this->faker->sentence(),
        ];
    }
}
