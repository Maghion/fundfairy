<?php

namespace App\Providers;

use App\Models\Donation;
use App\Policies\DonationPolicy;
use App\Models\BusinessReview;
use App\Policies\BusinessReviewPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Donation::class => DonationPolicy::class,
        BusinessReview::class => BusinessReviewPolicy::class,

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
    public function boot()
    {
        $this->registerPolicies();

    }
}
