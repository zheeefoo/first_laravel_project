<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'employer_id' => Employer::factory(), // Assuming you have an employer with ID 1
            'title' => fake()->jobTitle(),
            'company' => '',
            // 'company' => fake()->company(),
            'location' => fake()->city() . ', ' . fake()->state(),
            'description' => fake()->paragraph(),
        ];
    }
}
