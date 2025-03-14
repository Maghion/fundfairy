<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BlogPostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load job listings data
        $blogPosts = include database_path('seeders/data/job_listings.php');

        // Get all user IDs
        $userIds = User::pluck('id')->toArray();

        foreach ($blogPosts as &$blogPost) {
            // Assign a random user_id to each job listing
            $blogPost['user_id'] = $userIds[array_rand($userIds)];
            // Add timestamps
            $blogPost['created_at'] = now();
            $blogPost['updated_at'] = now();
        }

        // Insert job listings
        DB::table('blog-posts')->insert($blogPosts);

        // Truncate tables
        DB::table('blog-posts')->truncate();
        DB::table('users')->truncate();

        $this->call(RandomUserSeeder::class);
        $this->call(BlogPostSeeder::class);
    }
}
