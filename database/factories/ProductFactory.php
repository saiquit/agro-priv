<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
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
            'excerpt' => ['en' => $this->faker->sentence(), 'bn' => $this->faker->sentence()],
            'content' => ['en' => $this->faker->paragraphs(rand(1, 3), true), 'bn' => $this->faker->paragraphs(rand(1, 3), true)],

        ];
    }
}
