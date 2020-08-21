<?php

namespace App\Http\Middleware;

use Closure;

class AdminCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userRoles = Auth::user()->roles->pluck('name'); // trying to get list of the roles first
        // Pluck (name) = to bring all the name own by this user.
        // and it will check if the admin is in their
        if (!$userRoles->contains('admin')) { //if it doesn't contains admin redirect to the link or home.
            return redirect('/home');
        }
        if (Auth::check() && Auth::user()->isAdmin()) {
            return $next($request);
        } // go to next step
    }
}
