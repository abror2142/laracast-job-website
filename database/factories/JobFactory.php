<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;


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
            "title" => fake()->jobTitle(),
            "company_id" => Company::factory(),
            "salary" => fake()->numberBetween(60, 140) * 1000,
        ];
    }
}
