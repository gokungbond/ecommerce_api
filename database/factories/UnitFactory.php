<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Unit>
 */
class UnitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => fake()->sentence(rand(5, 10), true) . ' ' . fake()->randomElement(['PCS', 'BOX', 'KG', 'G']),
            'name' => fake()->sentence(20),
        ];
    }
}
