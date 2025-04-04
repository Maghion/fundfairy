<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class BlogPost extends Model
{
    use HasFactory;
    protected $table = 'blog_posts';
    protected $fillable = [
        'user_id',
        'title',
        'content',
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function index(): BelongsTo
    {
        $blogPosts =BlogPost::latest()->limit(6)->get();

        return view('pages.home')->with('BlogPosts', $blogPosts );
    }



}
