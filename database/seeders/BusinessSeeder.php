<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class BusinessSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load business data
        $businesses = include database_path('seeders/data/businesses.php');

        // Get all user IDs
        $userIds = User::pluck('id')->toArray();

        foreach ($businesses as &$business) {
            // Assign a random user_id to each business
            $business['user_id'] = $userIds[array_rand($userIds)];
            // Add timestamps
            $business['created_at'] = now();
            $business['updated_at'] = now();
        }

        // Insert businesses
        DB::table('businesses')->insert($businesses);
    }
}
