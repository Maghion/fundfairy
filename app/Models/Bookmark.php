<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
class Bookmark extends Pivot
{
    protected $table = 'donation_request_user_bookmark';

    protected $fillable = [
        'user_id',
        'donation_requests_id'
    ];

}
