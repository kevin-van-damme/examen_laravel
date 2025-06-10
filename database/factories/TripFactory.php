<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Trip>
 */
class TripFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'region' => $this->faker->randomElement(['east', 'west', 'north', 'central']),
            'start_date' => $this->faker->date,
            'duration_days' => $this->faker->numberBetween(1, 30),
            'price_per_person' => $this->faker->numberBetween(50, 1000),
        ];
    }
}
