<?php

namespace App\Providers;


use App\Models\Testimonial;
use App\Policies\TestimonialPolicy;

use App\Models\Donation;
use App\Policies\DonationPolicy;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Testimonial::class => TestimonialPolicy::class,
        Donation::class => DonationPolicy::class,
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
