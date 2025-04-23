<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'      => $this->faker->sentence(),
            'body'       => $this->faker->paragraphs(3, true),
            'enabled'    => $this->faker->boolean(80), // 80% chance true
            'user_id'    => User::factory(),          // associate a new user
            'created_at' => now(),
            'updated_at' => now(),
            'deleted_at' => null,    
        ];
    }
}
