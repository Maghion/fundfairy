<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Comment extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'user_id',
        'donation_request_id',
        'status',
        'title',
        'comment',
        'parent_comment_id',
    ];

// Relationship to User
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relationship to Donation Request
    public function donationRequest(): BelongsTo
    {
        return $this->belongsTo(DonationRequest::class);
    }

    // Relationship for parent comment
    public function parentComment(): BelongsTo
    {
        return $this->belongsTo(Comment::class, 'parent_comment_id');
    }

    // Relationship for child comments
    public function childComments(): HasMany
    {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }

}
