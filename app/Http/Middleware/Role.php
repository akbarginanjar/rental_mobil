<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Periksa apakah pengguna sudah login dan role_id adalah 1 (admin)
        if (Auth::check() && Auth::user()->role_id == 1) {
            return $next($request);
        }

        // Jika tidak, arahkan ke halaman lain atau tampilkan pesan kesalahan
        return redirect('/')->with('error', 'Anda tidak memiliki akses ke halaman ini.');
    }
}