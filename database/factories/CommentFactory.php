<?php

namespace Database\Factories;

use App\Models\DonationRequest;
use App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    protected $model = Comment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'=>User::factory(),
            'donation_requests_id'=> DonationRequest::factory(),
            'status'=> $this->faker->randomElement(['Pending', 'Approved', 'Rejected' ]),
            'title'=> $this->faker->sentence(),
            'comment'=> $this->faker->paragraph(),
            'parent_comment_id'=> null,
        ];
    }

    public function withParentComment(): self
    {
        return $this->state(function (array $attributes) {
            return [
                'parent_comment_id' => Comment::query()->inRandomOrder()->first()?->id ?? Comment::factory(),
            ];
        });
    }
}
