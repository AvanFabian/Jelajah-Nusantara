<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class registerController extends Controller
{
    // register function
    public function register(Request $request)
    {
        // validate the input
        $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ]);

        $user = new User();
        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->email_verified_at = now();
        $user->password = Hash::make($request->input('password'));
        $user->save();

        // return to login page
        return redirect()->route('login')->with('success', 'You have successfully registered');
    }
}