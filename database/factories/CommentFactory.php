<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post; // Import the Post model
use App\Models\User; // Import the User model
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(), // Associate with a User
            'post_id' => Post::factory(), // Associate with a Post
            'body' => $this->faker->text,
        ];
    }
}
