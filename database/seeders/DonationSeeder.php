<?php

namespace Database\Seeders;

use App\Models\Donation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\DonationRequest;

class DonationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load donations
        $donations = include database_path('seeders/data/donations.php');

        // Get all user IDs
        $userIds = User::pluck('id')->toArray();

        // Get all donation request IDs
        $requestIds = DonationRequest::pluck('id')->toArray();

        foreach ($donations as &$donation) {
            // Assign a random user_id to each donation
            $donation['user_id'] = $userIds[array_rand($userIds)];

            // Assign a random donation_requests_id to each donation
            $donation['donation_requests_id'] = $requestIds[array_rand($requestIds)];

            // Add timestamps
            $donation['created_at'] = now();
            $donation['updated_at'] = now();
        }

        // Insert donations
        DB::table('donations')->insert($donations);
        echo 'Donations created successfully!';
    }
}
