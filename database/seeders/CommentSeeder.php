<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comment;
use App\Models\DonationRequest;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Attach comments to each donation request
        DonationRequest::all()->each(function ($donationRequest) {
            Comment::factory()->count(5)->create([
                'donation_request_id' => $donationRequest->id,
            ]);
        });
    }
}
