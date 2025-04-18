<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * @desc Show all users
     * @route GET /users
     */
    public function index(): View
    {
        $title = 'All Users';
        $users = User::all();
        return view('users.index', compact('title', 'users'));
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

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('avatars', 'public');
            $validatedData['avatar'] = $path;
        }
        $phone_number =  $request->input('phone_number');
        $role =   $request->input('role');
        $created_at =   $request->input('created_at');
        return "User Profile for $email created at $created_at";

    }

    /**
     * @desc Display a specific user
     * @route GET /users/{id}
     */
    public function show(User $user): View
    {
        $title = 'Showing User '. $user->id;
        return view('users.show', compact('title','user'));
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
