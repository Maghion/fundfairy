<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class RegisterController extends Controller
{
    // @desc   Show user registration form
    // @route  GET /register
    public function register() : View
    {
        return view('auth.register');
    }

    // @desc   Process user registration form
    // @route  POST /register
    public function store(Request $request) : RedirectResponse
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);
        $user = User::create($validatedData);
        return redirect()->route('login')->with('success', 'You have been registered successfully! Please login.');
    }
}
