<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class Superadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!Auth::check())
            return redirect('/');

        if (Auth::user()->hasRole('superadmin')) {
            return $next($request);
        }
        Session::flash('error', 'Anda Tidak Punya Akses Ke halaman Tersebut');
        return back();
    }
}
