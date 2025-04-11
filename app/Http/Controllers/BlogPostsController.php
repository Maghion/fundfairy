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
        $blogPosts = BlogPost::where('status','=','published')
            ->orderBy('updated_at','DESC')->get();
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
    public function edit(BlogPost $blogPost)
    {

       return view('blog-posts.edit', [
           'blogPost' => $blogPost,
           'title' => 'Edit Blog Post'
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BlogPost $blogPost)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        $blogPost->update($validated);

        // Redirect back to the index page with all posts
        return redirect()->route('blog-posts.index')
            ->with('success', 'Blog post updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BlogPost $blogPost)
    {
        $blogPost->delete();

        return redirect()->route('blog-posts.index')
            ->with('success', 'Blog post deleted successfully');
    }



}
