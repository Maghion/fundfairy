<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DonationRequest extends Model
{
    use HasFactory;
    protected $table = 'donation_requests';
    protected $fillable = [
        'title',
        'description',
        'status',
        'funding_goal',
        'featured',
        'user_id'
    ];

    // Relation to user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
