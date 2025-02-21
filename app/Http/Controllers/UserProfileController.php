<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class UserProfileController extends Controller
{
    /**
     * @desc Show all users
     * @route GET /users
     */
    public function index(): View
    {
        $title = 'User Profiles';
        $profiles = [
            'user@gmail.com',
            'another_user@yahoo.com',
            'third-user@hotmail.com',
            ];
        return view('users.index', compact('title', 'profiles'));

    }

    /**
     * @desc Show profile creation form
     * @route GET /users/create
     */
    public function create(): View
    {
        return  view('users.create');
    }

    /**
     *@desc Store a newly created profile in storage.
     * @route POST /users
     */
    public function store(Request $request)
    {
        $email =  $request->input('email');
        $password =  $request->input('password');
        $first_name =  $request->input('first_name');
        $last_name =  $request->input('last_name');
        $biography =  $request->input('biography');
        $avatar =  $request->input('avatar');
        $phone_number =  $request->input('phone_number');
        $role =   $request->input('role');
        $created_at =   $request->input('created_at');
        return "User Profile for $email created at $created_at";

    }

    /**
     * @desc Display a specific user
     * @route GET /users/{id}
     */
    public function show(string $id): String
    {
        return  "Viewing profile for $id";
    }

    /**
     * @desc Display edit form
     * @route GET /users/{users}/edit
     */
    public function edit(string $id): String
    {
        return   "Edit profile for $id";
    }

    /**
     * @desc Update a specific user
     * @route PUT /users/{id}
     */
    public function update(Request $request, string $id)
    {
        return    "Update profile for $id";
    }

    /**
     * @desc yeet user off our platform
     * @route DELETE /users/{id}
     */
    public function destroy(string $id)
    {
        return    "You are the weakest link, Goodbye! $id";
    }
}
