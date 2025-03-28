<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Comment;
use App\Models\User;
use App\Models\DonationRequest;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
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
            'donation_request_id'=> DonationRequest::factory(),
            'status'=> $this->faker->randomElement(['Pending', 'Approved', 'Rejected']),
            'title'=> $this->faker->sentence(),
            'comment'=> $this->faker->paragraph(),
            'parent_comment_id'=> null,
        ];
    }
}
