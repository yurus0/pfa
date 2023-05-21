<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(50),
            'description' => $this->faker->text(200),
            'date_time' => $this->faker->dateTime,
            'location' => $this->faker->address,
            'status' => $this->faker->randomElement(['done', 'pending']),
            'user_id' => \App\Models\User::factory()
        ];
    }
}
