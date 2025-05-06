<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class BlogPostsController extends Controller
{
    use AuthorizesRequests;
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $title = 'Blog Posts';

        $blogPosts = BlogPost::where('status', 'published')
            ->orderBy('updated_at', 'DESC')
            ->paginate(4); // 10 posts per page

        return view('blog-posts.index', compact('blogPosts', 'title'));
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create():  View | RedirectResponse
    {
//        if(!Auth::check()){
//            return redirect()->route('login')->with('warning', 'You must be logged in to create blog posts.');
//        }
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
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif',
        ]);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');  // Store image in public disk
            $validatedData['image'] = $imagePath;
        }

        // Set the status and user_id
        $validatedData['status'] = 'published';
        $validatedData['user_id'] = auth()->id();

        // Create the blog post
        BlogPost::create($validatedData);

        return redirect()->route('blog-posts.index')->with('success', 'Blog Post created successfully!');
    }


    /**
     * Display the specified resource.
     */
    public function show(BlogPost  $blogPost): View
    {
        $user = $blogPost->user;  // Eager load the associated user
        $title = 'View Blog Post';
        return view('blog-posts.show', compact('blogPost', 'user', 'title'));
    }

    /**
     * Show the form for editing the specified resource.
     * @throws AuthorizationException
     */
    public function edit(BlogPost $blogPost)
    {

//        if(!Auth::check()){
//            return redirect()->route('login')->with('warning', 'You must be logged in to edit blog posts.');
//        }
        $this->authorize('update', $blogPost);
       return view('blog-posts.edit', [
           'blogPost' => $blogPost,
           'title' => 'Edit Blog Post'
        ]);

    }

    /**
     * Update the specified resource in storage.
     * @throws AuthorizationException
     */
    public function update(Request $request, BlogPost $blogPost): RedirectResponse
    {
        $this->authorize('update', $blogPost);

        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('blog_images', 'public');  // Store image
            $validatedData['image'] = $imagePath;
        }


        $blogPost->update($validated);


        // Redirect back to the index page with all posts
        return redirect()->route('blog-posts.show', $blogPost->id)
            ->with('success', 'Blog post updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     * @throws AuthorizationException
     */
    public function destroy(BlogPost $blogPost): RedirectResponse
    {
        $this->authorize('delete', $blogPost);

        $blogPost->delete();

//        if(!Auth::check()){
//            return redirect()->route('login')->with('warning', 'You must be logged in to delete blog posts.');
//        }


        return redirect()->route('blog-posts.index')
            ->with('success', 'Blog post deleted successfully');
    }



}
