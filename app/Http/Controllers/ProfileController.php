<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show()
    {
        // Get the authenticated user
        $user = Auth::user();

        // Verify we have a user
        if (!$user) {
            return redirect()->route('login')->with('error', 'Please log in to view your profile');
        }

        // Pass the user data to the view
        return view('pages.profile', [
            'user' => $user
        ]);
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'faculty' => 'required|string|max:255',
            'study_year' => 'required|string|max:50',
            'campus' => 'required|string|max:255',
        ]);

        $user->update($validatedData);

        return redirect()->route('profile')->with('success', 'Profile updated successfully!');
    }

}
