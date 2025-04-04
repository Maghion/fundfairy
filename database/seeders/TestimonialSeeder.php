<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load testimonials data
        $testimonials = include database_path('seeders/data/testimonials.php');

        // Get all user IDs
        $userIds = User::pluck('id')->toArray();

        foreach ($testimonials as &$testimonial) {
            // Assign a random user_id to each testimonial
            $testimonial['user_id'] = $userIds[array_rand($userIds)];

            // Add timestamps
            $testimonial['created_at'] = now();
            $testimonial['updated_at'] = now();
        }

        // Insert job listings
        DB::table('testimonials')->insert($testimonials);

    }
}
