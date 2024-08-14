<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => 'This is course description',
            'student_limit' => fake()->numberBetween(10,50),
            'start_date' => fake()->date(),
            'end_date' => fake()->date(),
            'register' => 'open',
        ];
    }
}
