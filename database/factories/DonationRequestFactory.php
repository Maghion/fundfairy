<?php

namespace Database\Factories;

use App\Models\Business;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\DonationRequest>
 */
class DonationRequestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'business_id' => Business::factory(), // Create new user for each listing
            'title' => $this->faker->sentence(),
            'description' => $this->faker->paragraphs(1, true),
            'status' => $this->faker->randomElement(['Active', 'Pending', 'Complete']),
            'funding_goal' => $this->faker->numberBetween(01, 1200000),
            'featured' => $this->faker->boolean,

        ];
    }
}
