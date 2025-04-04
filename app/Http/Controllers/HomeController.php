<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {

        $blogPosts =BlogPost::latest()->limit(6)->get();
        return view('pages.index');
    }

    //
}
