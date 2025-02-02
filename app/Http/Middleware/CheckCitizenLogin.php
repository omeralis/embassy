<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CheckCitizenLogin
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the citizen is logged in
        if (!Session::has('citizen_id')) 
        {
            // If not logged in, redirect to the login page
            return redirect()->route('login')->with('message', 'You must log in first');
        }

        // Citizen is logged in, proceed to the next request
        return $next($request);
    }
}
