<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;


    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'email',
        'email_verified_at',
        'password',
        'remember_token',
        'first_name',
        'last_name',
        'biography',
        'avatar',
        'phone_number',
        'role'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function blogPosts(): HasMany
    {
        return $this->hasMany(BlogPost::class);
    }

    public function bookmarkedBusinesses(): void //BelongsToMany
    {
//        return $this->belongsToMany(Business::class, 'bookmark')->withTimestamps();
    }

    public function business(): HasMany
    {
        return $this->hasMany(Business::class);
    }

   // Relationship with business_reviews
    public function business_reviews(): HasMany
    {
        return $this->hasMany(BusinessReview::class);
    }

  // Relate to comments
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    // Also need DonationRequest model to have this function
    public function donations(): HasMany {
        return $this->hasMany(Donation::class);
    }

    //checks whether the logged-in user has made a donation to that specific donation request
    public function hasDonatedTo($donationRequest): bool {
        return $this->donations()->where('request_id', $donationRequest->id)->exists();
    }

    // Relationship with  testimonials
    public function testimonials(): HasMany
    {
        return $this->hasMany(Testimonial::class);
    }

}
