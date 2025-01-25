<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RedirectIfEmailVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user is logged in and has verified their email
        if (Auth::check() && Auth::user()->email_verified_at !== null) {
            // Redirect them to the intended page or a different route
            return redirect()->route('gym.pages.home')->with('info', 'Your email is already verified.');
        }

        return $next($request);
    }
}
