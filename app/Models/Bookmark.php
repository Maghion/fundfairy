<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;
class Bookmark extends Pivot
{
    protected $table = 'donation_request_user_bookmarks';

    protected $fillable = [
        'user_id',
        'donation_request_id'
    ];

}
