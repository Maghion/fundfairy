<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class BlogPostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = 'BLOG POSTS';
        $blogPosts = BlogPost::all();
        return view('blog-posts/index')->with('blogPosts', $blogPosts)->with('title', $title);
       // return view('blog-posts.index', compact('title', 'blogPosts'));
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
    public function store(Request $request): RedirectResponse
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        // Create a new jbo listing with the validated data
        BlogPost::create([
            'title' => $validatedData['title'],
            'content' => $validatedData['content'],
        ]);

        return redirect()->route('blog-posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(BlogPost  $blogPost): View
    {
        $title = 'View Blog Post';
        return view('blog-posts.show', compact('blogPost', 'title'));
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
