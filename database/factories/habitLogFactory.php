<?php

namespace Database\Factories;

use App\Models\Habit;
use App\Models\habitLog;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<habitLog>
 */
class habitLogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {


        return [
            'habit_id' => Habit::factory(),
            'uuid' => fake()->uuid(),
            'complete_at' => fake()->dateTimeBetween('-1year', 'now')
        ];
    }
}
