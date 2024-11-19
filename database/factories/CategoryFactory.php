<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => ['en' => $this->faker->unique()->word(), 'bn' => $this->faker->unique()->word()],
            'slug' => $this->faker->unique()->slug(),
            'description' => ['en' => $this->faker->sentence(), 'bn' => $this->faker->sentence()],
        ];
    }
}
