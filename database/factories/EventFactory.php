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
            'title' => ['en' => $this->faker->sentence, 'bn' => $this->faker->sentence],
            'short_description' => ['en' => $this->faker->paragraph, 'bn' => $this->faker->paragraph],
            'content' => ['en' => $this->faker->paragraphs(rand(3, 6), true), 'bn' => $this->faker->paragraphs(rand(3, 6), true)],
            'location' => $this->faker->optional()->address ? ['en' => $this->faker->address, 'bn' => $this->faker->address] : null,
            'speakers' => $this->faker->optional()->name ? ['en' => $this->faker->name, 'bn' => $this->faker->name] : null,
            'date' => $this->faker->date,
            'time' => $this->faker->time,
            'event_type' => $this->faker->optional()->word,
            'contact_person' => $this->faker->optional()->name,
            'contact_email' => $this->faker->optional()->safeEmail,
            'contact_phone' => $this->faker->optional()->phoneNumber,
            'contact_site' => $this->faker->optional()->url,
            'registration_link' => $this->faker->optional()->url,
        ];
    }
}
