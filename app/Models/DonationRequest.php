<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Donation;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;


class DonationRequest extends Model
{
    use HasFactory;
    protected $table = 'donation_requests';
    protected $fillable = [
        'business_id',
        'title',
        'description',
        'status',
        'funding_goal',
        'featured'

    ];

    // Relation to  businesses here
    public function business() : BelongsTo
    {
        return $this->belongsTo(Business::class);

    }

    public function donations(): HasMany
    {
        return $this->hasMany(Donation::class);

    }

    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }

    public function bookmarkedByUsers(): belongsToMany
    {
        return $this->belongsToMany(User::class, 'donation_request_user_bookmark')->withTimestamps();
    }
}

