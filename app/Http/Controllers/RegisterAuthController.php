<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;
use Illuminate\Support\Facades\Auth;

class RegisterAuthController extends Controller
{
    public function create (Request $request) {
        return view('auth.register');
    }

    public function store (Request $request) {
        // Validate Request
        $attributes = $request->validate([
            'name' => ['required', 'min:4', 'max:20'],
            'email' => ['required', 'email'],
            'password' => ['required', Password::default(), 'confirmed'] 
        ]);

        // Create user
        $user = User::create($attributes);

        // Create Session
        Auth::login($user);

        // Redirect
        return redirect('/jobs');
    }
}
