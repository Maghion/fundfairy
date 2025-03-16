<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;


class NewsletterController extends Controller
{
    public function index(): view
    {
        $newsletter = "
            <h1 class='text-2xl'>Fundfairy -  Newsletter</h1>
        ";
        return view('newsletter/index')->with('newsletter', $newsletter);
    }



}
