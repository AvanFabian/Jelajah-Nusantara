<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class loginController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $remember = $request->boolean('remember');
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            // Set the verified flag in the user's session
            $request->session()->put('verified', true);

            return redirect()->intended('/login');
        }

        return back()->withErrors([
            'email' => 'Username or password is incorrect',
        ])->onlyInput('email');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->remove('verified');
        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}