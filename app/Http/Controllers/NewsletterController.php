<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;


class NewsletterController extends Controller
{
    public function index(): view
    {
        $newsletter = "
            <h1 class='text-3xl font-bold text-fuchsia-950 border-b pb-2'> Newsletter</h1>
        ";
        return view('newsletter/index')->with('newsletter', $newsletter);
    }



}
