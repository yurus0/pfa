<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
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
            'category' => $this->faker->randomElement(['work', 'personal', 'hobby']),
            'status' => $this->faker->randomElement(['done', 'pending']),
            'deadline' => $this->faker->date,
            'event_id' => \App\Models\Event::factory(),
            'user_id' => \App\Models\User::factory()
        ];
    }
}
