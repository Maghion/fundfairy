<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    /**
     * @desc Show all users
     * @route GET /users
     */
    public function index()
    {
        $title = 'User Profiles';
        $profiles = [
            'user@gmail.com',
            'another_user@yahoo.com',
            'third-user@hotmail.com',
            ];
        return view('users/index', compact('title', 'profiles'));

    }

    /**
     * @desc Show profile creation form
     * @route GET /users/create
     */
    public function create()
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
     * @route GET /users/{email}
     */
    public function show(string $email)
    {
        return  view('users.show', compact('email'));
    }

    /**
     * @desc Display edit form
     * @route GET /users/edit
     */
    public function edit(string $email)
    {
        return   "Edit profile for $email";
    }

    /**
     * @desc Update a specific user
     * @route GET /users/{email}/edit
     */
    public function update(Request $request, string $email)
    {
        return    "Update profile for $email";
    }

    /**
     * @desc yeet user off our platform
     * @route DELETE /users/{email}
     */
    public function destroy(string $email)
    {
        return    "You are the weakest link, Goodbye! $email";
    }
}
