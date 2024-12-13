<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create(Request $request) {
        return view("auth.login");
    }

    public function store(Request $request) {
        // Validate Input 
        $attributes = $request->validate([
            'name' => ['required', 'max:20', 'min:4'],
            'password' => ['required'],
        ]);

        // Authenticate
        if (! Auth::attempt ($attributes)) {
            throw ValidationException::withMessages([
                'name' => 'Credentials do not match!'
            ]);
        };
        
        // Create Session
        $request->session()->regenerate();

        // Redirect
        return redirect('/jobs');

    }

    public function destroy (Request $request) {
        Auth::logout();
        return redirect('/');
    }
}
