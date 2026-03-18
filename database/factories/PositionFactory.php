<?php

namespace Database\Factories;

use App\Models\Position;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Position>
 */
class PositionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'position_name' => $this->faker->jobTitle(),
            'base_salary' => $this->faker->randomFloat(2, 5000000, 10000000),
            'description' => $this->faker->sentence(),
        ];
    }
}
