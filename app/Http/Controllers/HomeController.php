<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\Testimonial;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index() {

        $blogPosts =BlogPost::latest()->limit(3)->get();
        $testimonials = Testimonial::oldest()->get();
        $testimonialSlides = $testimonials->chunk(2);

        return view('pages.index', compact('blogPosts', 'testimonialSlides'));    }

    //
}
