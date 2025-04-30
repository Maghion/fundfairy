<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Testimonial;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {

        $blogPosts =BlogPost::latest()->limit(3)->get();
        $testimonials = Testimonial::oldest()->limit(3)->get();
        return view('pages.index', compact('blogPosts', 'testimonials'));    }

    //
}
