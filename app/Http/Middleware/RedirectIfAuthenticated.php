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
        switch($guard){
            case 'admin':
                if ($guard == "admin" && Auth::guard($guard)->check()) {
                    return redirect('/admin-dashboard');
                }
            case 'alumni':
                if ($guard == "alumni" && Auth::guard($guard)->check()) {
                    return redirect('/alumni-dashboard');
                }
            case  'student':
                if ($guard == "student" && Auth::guard($guard)->check()) {
                    return redirect('/student-dashboard');
                }
                break;

            default:
                if (Auth::guard($guard)->check()) {
                    return redirect('/');
                }
                break;
        }



        return $next($request);
    }
}
