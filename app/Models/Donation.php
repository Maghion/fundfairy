<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Traits\HasRoles;

class Donation extends Model
{
    use HasFactory, HasRoles;

    protected $fillable = [
        'donation_request_id',
        'user_id',
        'request_id',
        'amount',
        'message',
        'anon',
        'type'
    ];

    // Relation to user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relation to request
    public function donationRequest(): BelongsTo
    {
        return $this->belongsTo(DonationRequest::class);
    }

}
