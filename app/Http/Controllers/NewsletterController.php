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
        return view('/pages/newsletter')->with('title', $title);
    }

    public function store (Request $request): RedirectResponse
    {
//validation and unique email

        $validatedData = $request->validate([
            'email' => 'required|email|max:255',
    ]);
        // check existing subscriber
        $existingSubscriber = User::where('email', $validatedData['email'])
            ->where('role', 'subscriber')
            ->first();

        if ($existingSubscriber) {
            return redirect()->back()
                ->withErrors(['email' => 'This email is already subscribed.'])
                ->withInput();
        }


        $validatedData['first_name'] = '';
        $validatedData['last_name'] = '';
        $validatedData['password'] = '';
        $validatedData['role'] = 'subscriber';

        // Submit to database
        User::create($validatedData);

        return redirect()->route('newsletter.index')->with('success', 'Email saved successfully!');
    }



}
