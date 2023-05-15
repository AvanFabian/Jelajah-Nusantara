<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use App\Models\User;

class loginController extends Controller
{
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        // dd($credentials);
        $remember = $request->has('remember');
        // dd($remember);
        if (Auth::attempt($credentials, $remember)) {
            $user = Auth::user();
            // dd($user);

            // Check if the user is an admin
            if ($user->role === 'superadmin') {
                // Perform SUPERADMIN-Highest Priority Actions
                $request->session()->regenerate();

                // Set the verified flag in the admin's session
                $request->session()->put('superadmin', true);
    
                return redirect()->intended('/admin/dashboard')->with('success', 'You are an Administrator now!');
            } elseif ($user->role === 'admin') {
                // Perform admin-specific actions
                $request->session()->regenerate();

                // Set the verified flag in the admin's session
                $request->session()->put('admin', true);
    
                return redirect()->intended('/admin/dashboard')->with('success', 'You are an Administrator now!');
            } elseif ($user->role === 'user') {
                // Perform regular user actions
                $request->session()->regenerate();
    
                // Set the verified flag in the user's session
                $request->session()->put('verified', true);
    
                return redirect()->intended('/home/pulau')->with('success', 'Login Success');
            }
        }

        return back()->withErrors([
            'email' => 'Username or password is incorrect',
        ])->onlyInput('email');
    }

    public function forgotPassword(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
        ]);

        $user = User::where('email', $credentials['email'])->first();

        if ($user) {
            $user->sendPasswordResetNotification($user->createToken('password reset')->plainTextToken);
        }

        return back()->with('success', 'Password reset link sent!');
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