<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

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

    public function blogPosts(): void //HasMany
    {
//        return $this->hasMany(BlogPost::class);
    }

    public function bookmarkedBusinesses(): void //BelongsToMany
    {
//        return $this->belongsToMany(Business::class, 'bookmark')->withTimestamps();
    }

    public function businessReviews(): void //HasMany
    {
//        return $this->hasMany(BusinessReview::class);
    }

    public function comments(): void //HasMany
    {
//        return $this->hasMany(Comment::class);
    }

    public function donations(): void //HasMany
    {
//        return $this->hasMany(Donation::class);
    }
    public function testimonials(): void //HasMany
    {
//        return $this->hasMany(Testimonial::class);
    }

}
