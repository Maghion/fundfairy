<?php

namespace App\Providers;

use App\Models\Testimonial;
use App\Models\Comment;
use App\Models\Donation;

use App\Policies\TestimonialPolicy;
use App\Policies\CommentPolicy;
use App\Policies\DonationPolicy;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Testimonial::class => TestimonialPolicy::class,
        Donation::class => DonationPolicy::class,
        Comment::class => CommentPolicy::class,
    ];

    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
    }
}
