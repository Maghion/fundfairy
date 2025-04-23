<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;


class NewsletterController extends Controller
{
    public function index(): view
    {
        $title = 'Newsletter';
        return view('/pages/newsletter')->with('newsletter', $title);
    }

    public function store (Request $request): RedirectResponse
    {
//validation and unique email

        $validatedData = $request->validate([
            'email' => 'required|string|max:255',
        ]);

        $validatedData['first_name'] = '';
        $validatedData['last_name'] = '';
        $validatedData['password'] = '';
        $validatedData['role'] = 'subscriber';

        // Submit to database
        User::create($validatedData);

        return redirect()->route('newsletter.index')->with('success', 'Email saved successfully!');
    }



}
