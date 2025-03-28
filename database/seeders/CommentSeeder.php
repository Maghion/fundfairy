<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Generate 20 top-level comments
        Comment::factory()->count(10)->create();

        // Generate 10 replies for random comments
        Comment::factory()->count(5)->withParentComment()->create();
    }
}
