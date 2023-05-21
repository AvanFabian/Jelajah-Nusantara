<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class CekUserLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Cek apakah user sudah login / ada session yang aktif
        if (Auth::check() && (Auth::user()->role === 'user' || Auth::user()->role === 'admin' || Auth::user()->role === 'superadmin')) {
            // return redirect('/login')->with('hakAksesAdmin', 'Anda tidak memiliki akses ke halaman tersebut');
            return $next($request);
        }
        
        else{
            return redirect('/login')->with('hakAksesAdmin', 'Login terlebih dahulu untuk mengakses halaman ini');
        }
    }
}