<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
//        $users = User::all();
        $users = User::paginate(10);
        return view('users.index', compact('title', 'users'));
    }

    /**
     * @desc Show profile creation form
     * @route GET /users/create
     */
    public function create(): View | RedirectResponse
    {
        $title = "Create New User";
        return view('users.create' , compact('title'));
    }

    /**
     *@desc Store a newly created profile in storage.
     * @route POST /users
     */

    public function store (Request $request): RedirectResponse
    {
        $validatedData = $request->validate([

            'email' => 'required|string|max:255',
            //'password'=> 'required|string',
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'biography'=>'required|string|max:255',
            'avatar'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone_number'=>'nullable|string|max:255',
            'role'=>'required|string|max:255',
            //'created_at'=>'required|string|max:255',

        ]);

        if ($request->hasFile('avatar')) {
            $path = Storage::disk('s3')->putFile('avatars', $request->file('avatar'), 'public');
            $validatedData['avatar'] = "https://".env('AWS_BUCKET')."s3.".env('AWS_DEFAULT_REGION')."amazonaws.com.".$path;
        }

        // Submit to database
        User::create($validatedData);

        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    /**
     * @desc Display a specific user
     * @route GET /users/{id}
     */
    public function show(User $user): View
    {
        $title = 'View a User ';
        return view('users.show', compact('user', 'title'));
    }

    /**
     * @desc Display edit form
     * @route GET /users/{users}/edit
     */
    public function edit(User $user): View
    {

        $title = 'Edit Single User';

        return view('users.edit', compact('user', 'title'));
    }


    /**
     * @desc Update a specific user
     * @route PUT /users/{id}
     */
    public function update(Request $request, User $user):RedirectResponse
    {
        $validatedData = $request->validate([

            'email' => 'required|string|max:255',
            'first_name'=>'required|string|max:255',
            'last_name'=>'required|string|max:255',
            'biography'=>'required|string|max:255',
            'avatar'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'phone_number'=>'nullable|string|max:255',
            'role'=>'required|string|max:255',
            //'created_at'=>'required|string|max:255',

        ]);
        dd($validatedData);
        if ($request->hasFile('avatar')) {
            // Delete the old avatar from storage
            if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
                Storage::disk('public')->delete($user->avatar);
            }
            // Store the file and get the path
            $path = $request->file('avatar')->store('avatar', 'public');

            // Add the path to the validated data array
            $validatedData['avatar'] = $path;
        }
        $user->update($validatedData);
        //give this page
        return redirect()->route('users.show', $user->id)->with('success', 'User updated successfully!');


    }

    /**
     * @desc yeet user off our platform
     * @route DELETE /users/{id}
     */
    public function destroy(User $user): RedirectResponse
    {
        // Check if the user is authorized
        $this->authorize('delete', $user);
        if ($user->avatar && Storage::disk('public')->exists($user->avatar)) {
            Storage::disk('public')->delete($user->avatar);
        }
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }
}
