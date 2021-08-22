<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check()) {
            if(Auth::user()->hasRole('super_admin')) {
                return redirect()->route('admin.dashboard');
            } else if (Auth::user()->hasRole('seller')) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('landing.home');
            }
        }

        return $next($request);
    }
}
