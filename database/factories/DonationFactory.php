<?php

namespace Database\Factories;

use App\Models\DonationRequest;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Donation>
 */
class DonationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(),
            'donation_request_id' => DonationRequest::factory(),
            'amount' => $this->faker->randomFloat(2, 10, 100),
            'message' => $this->faker->realText(),
            'anon' => $this->faker->boolean(),
            'type' => $this->faker->randomElement(['Singular', 'Weekly', 'Monthly']),
        ];
    }
}
