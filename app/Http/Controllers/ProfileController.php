<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function update(Request $request): RedirectResponse
    {
        // Get the authenticated user
        $user = Auth::user();

        // Validate the incoming request data
        $validatedData = $request->validate([
            'first_name'   => 'nullable|string|max:255',
            'last_name'    => 'nullable|string|max:255',
            'biography'     => 'nullable|string|max:1000',
            'phone_number' => 'nullable|string|max:20',
            'email'        => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'avatar'       => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        // Handle file upload
        if ($request->hasFile('avatar')) {
            // Delete old avatar if exists
            if ($user->avatar) {
                Storage::delete('public/' . $user->avatar);
            }

            // Store new avatar
            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $avatarPath;
        }

        // Update the user's information
        $user->fill($validatedData);

        // If there's a new avatar, store it and override the previous value
        if ($request->hasFile('avatar')) {
            if ($user->avatar) {
                Storage::delete('public/' . $user->avatar);
            }

            $avatarPath = $request->file('avatar')->store('avatars', 'public');
            $user->avatar = $avatarPath;
        }

// Save the updated user
        $user->save();

        // Redirect back to the dashboard page with a success message
        return redirect()->route('dashboard')->with('success', 'User info updated successfully!');
    }
}
