<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;

class CommentFactory extends Factory
{

    protected $model = Comment::class;




    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'body' => $this->faker->realText(250),
            'created_at' => $this->faker->dateTimeBetween('-2 month')

        ];
    }
}
