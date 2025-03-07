<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\Relations\BelongsTo;
//use Illuminate\Database\Eloquent\Relations\BelongsToMany;
//use Illuminate\Database\Eloquent\Relations\HasMany;

class Job extends Model
{
    use HasFactory;

    protected $table = 'comments';

    protected $fillable = [
        'comment_id',
        'user_id',
        'salary',
        'request_id',
        'status',
        'comment',
        'parent_comment',
    ];

    // Relation to user
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

