<?php

namespace Database\Seeders;

use App\Models\Business;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusinessReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load business review data
        $reviews = include database_path('seeders/data/business-reviews.php');

        // Get all user IDs
        $userIds = User::pluck('id')->toArray();

        // Get all business IDs
        $businessIds = Business::pluck('id')->toArray();

        foreach ($reviews as &$review) {
            // Assign a random user_id to each review
            $review['user_id'] = $userIds[array_rand($userIds)];

            // Assign a random business_id to each review
            $review['business_id'] = $businessIds[array_rand($businessIds)];

            // Add timestamps
            $review['created_at'] = now();
            $review['updated_at'] = now();
        }


        // Insert business-review
        DB::table('business-reviews')->insert($reviews);
        echo 'Review created successfully!';
    }
}
