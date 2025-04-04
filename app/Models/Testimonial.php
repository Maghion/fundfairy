<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Testimonial extends Model
{
    use HasFactory;

    protected $table = 'testimonials';
    protected $fillable = [
        'user_id',
        'title',
        'description',
        'status',
        'featured',
        'testimonial_image'

    ];

    // Relation to user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
