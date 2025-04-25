<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;


class AboutController extends Controller
{
    public function index(): view
    {

        $title = 'About Us';
        return view('pages/about')->with('title', $title);
    }



}
