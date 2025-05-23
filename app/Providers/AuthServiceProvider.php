<?php

namespace App\Providers;

use App\Models\Testimonial;
use App\Models\Comment;
use App\Models\Donation;
use App\Models\Business;
use App\Models\BusinessReview;
use App\Models\BlogPost;

use App\Policies\TestimonialPolicy;
use App\Policies\CommentPolicy;
use App\Policies\DonationPolicy;
use App\Policies\BusinessPolicy;
use App\Policies\BusinessReviewPolicy;
use App\Policies\BlogPostPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Testimonial::class => TestimonialPolicy::class,
        Donation::class => DonationPolicy::class,
        BusinessReview::class => BusinessReviewPolicy::class,
        Comment::class => CommentPolicy::class,
        Business::class => BusinessPolicy::class,
        BlogPost::class => BlogPostPolicy::class,
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
