<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Udara>
 */
class UdaraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'mq_135' => fake()->numberBetween(50, 200),
            'mq_09' => fake()->numberBetween(50, 200),
            'mq_07' => fake()->numberBetween(50, 200),
        ];
    }
}
