<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Business extends Model
{
    use HasFactory;

    protected $table = 'businesses';

    protected $fillable = [
        'user_id',
        'name',
        'address1',
        'address2',
        'city',
        'state',
        'zip_code',
        'phone_number',
        'featured',
        'business_description'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function businessReviews(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(BusinessReview::class);
    }
}
