<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(50),
            'body' => $this->faker->realText(600),
            'author' => $this->faker->name,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
