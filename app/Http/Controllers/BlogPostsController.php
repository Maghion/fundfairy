<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BlogPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = 'BLOG POSTS';
        $blogPosts = BlogPost::where('status', 'published')
            ->orderBy('updated_at', 'DESC')
            ->with('id') // eager load author relationship
            ->get();
        return view('blog-posts/index')->with('blogPosts', $blogPosts)->with('title', $title);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $title = 'New Blog Post';
        return view('blog-posts.create', compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): string
    {
        $title = $request->input('title');
        $content= $request->input('description');

        return "Title: $title, Description: $content";
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost  $blogPost): View
    {
        return view('blog-posts.show', compact('blogPost'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id): string
    {
        return "Edit Blog Post: $id";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id): string
    {
        return "You have updated Blog Post: $id";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): string
    {
        return "You have deleted Blog Post: $id";
    }
}
