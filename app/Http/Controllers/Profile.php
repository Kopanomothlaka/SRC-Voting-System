<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Profile extends Controller
{
    public function show()
    {
        $user = Auth::user(); // get currently logged-in user
        return view('pages.profile', compact('user'));
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
