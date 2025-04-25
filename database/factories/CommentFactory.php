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
        $commentTitles = [
            'So cool!',
            'Love this.',
            'Awesome work!',
            'Stoked to support!',
            'You got this!',
            'Let’s go!',
            'Keep it up!',
            'Count me in.',
            'Grateful for this.',
            'Big fan!',
        ];

        $realComments = [
            'This is such a great idea. Happy to contribute!',
            'Love what you are doing with this project, keep up the noble work.',
            'Proud to support the local entrepreneurial community!',
            'Hope this helps you reach your goal. We are excited to see what the future holds.',
            'Keep up the awesome work! Its such a great way to make our local world just a bit better and brighter.',
            'This is exactly the kind of thing we need around here.',
            'Can’t wait to see this in action!',
            'Much respect to everyone involved.  Our community could use a project like this.',
            'You’ve got my support, and now some funding to help push you forward!',
            'Grateful for the work you\'re doing. Keep pushing!',
            ];

        $commentEmojis = ['🔥','💵','🤝','🫶','🌱','💯', '🙌', '👏', '🌟', '🪄', '🛠️', '🧡'];

        return [
            'user_id' => User::factory(),
            'donation_request_id' => DonationRequest::factory(),
            'status' => $this->faker->randomElement(['Pending', 'Approved', 'Rejected']),
            'title' => $this->faker->randomElement($commentTitles),
            'comment' => $this->faker->randomElement($realComments)
                . ($this->faker->boolean(50) ? ' ' . $this->faker->randomElement($commentEmojis) : ''),

            'parent_comment_id' => null,
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
