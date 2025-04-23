<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BusinessReview extends Model
{
    use HasFactory;

    protected $table = 'business_reviews';
    protected $fillable = [
        'user_id',
        'business_id',
        'title',
        'rating',
        'comment'
    ];

    //Relation to user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // Relation to business
    public function business(): BelongsTo
    {
        return $this->belongsTo(Business::class);
    }



}
