<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Business extends Model
{
    protected $table = 'business';

    protected $fillable = [
        'name',
        'address1',
        'address2',
        'city',
        'state',
        'zip_code',
        'phone_number',
    ];

}
