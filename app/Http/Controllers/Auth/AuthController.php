<?php

namespace App\Http\Controllers\Auth;

use Inertia\Inertia;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //
    public function showLoginPage(Request $request)
    {
        //
        return Inertia::render('Auth/Login');
    }

    public function authenticateUserForLogin(Request $request)
    {
        //
        // dd($request->all());
        if (!Auth::attempt($request->validate([
            'email' => "bail|required|email",
            'password' => "bail|required|string",
        ]))) {
            //
            throw ValidationException::withMessages([
                'email' => "Incorrect email or password. Please try again.",
            ]);
        }

        $request->session()->regenerate();
        $request->session()->flash('success', 'Logged in successfully.');
        return redirect()->route('home');

        // this redirect is used to redirect user automatically to the calling page from where
        // it was redirected to login page earlier...
        // return redirect()->intended();
    }

    public function logoutUser(Request $request)
    {
        //
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.show');
    }
}
