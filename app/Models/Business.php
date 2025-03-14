<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'businesses';

    protected $fillable = [
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
}
