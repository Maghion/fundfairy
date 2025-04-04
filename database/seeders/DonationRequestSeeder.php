<?php

namespace Database\Seeders;

use App\Models\Business;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class DonationRequestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Load $donationRequests data
        $donationRequests = include database_path('seeders/data/donation_requests.php');

        // Get all user IDs
        $businessIds = Business::pluck('id')->toArray();

        foreach ($donationRequests as &$donationRequest) {
            // Assign a random business_id to each job listing
            $donationRequest['business_id'] = $businessIds[array_rand($businessIds)];
            // Add timestamps
            $donationRequest['created_at'] = now();
            $donationRequest['updated_at'] = now();
        }

        // Insert donation_requests
        DB::table('donation_requests')->insert($donationRequests);
    }
}
