<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }


public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Check if the email exists in the database
    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return back()->with('error', 'The email does not exist.');
    }

    // Check if the password is incorrect
    if (!Hash::check($request->password, $user->password)) {
        return back()->with('error', 'Incorrect password.');
    }

    // Attempt login
    if (Auth::attempt($credentials)) {
        $user = Auth::user();

        if ($user->role === 'admin') {
            return redirect()->route('admin.dashboard');
        }

        return redirect()->route('home');
    }

    return back()->with('error', 'Invalid login credentials.');
}


    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
