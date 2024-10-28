<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User; // Make sure the User model is imported
use App\Models\Post; // Make sure the Post model is imported

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::all()->each(function ($user) {
            Post::factory()->count(3)->create(['user_id' => $user->id]);
        });
    }
}
