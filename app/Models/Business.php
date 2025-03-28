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

    public static function create(array $array)
    {
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
