<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Illuminate\Support\Facades\Auth;

class CustomAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $guard = null)
    {
        // dd(explode('|', $guard));
        if (!Auth::guard($guard)->check()) {
            return redirect()->route('user.logins');
        }
        return $next($request);
        // $path = $request->path();
        // if ($path == "home") {
        // return redirect()->route('userlogins');
        //     dd("redirect done");
        // }
    }
}
