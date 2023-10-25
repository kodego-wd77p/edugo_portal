<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */


    public function handle(Request $request, Closure $next)
    {
        // ADMIN ROLE == 1
        // USER ROLE == 0

        if(Auth::check()) {
            // if you are admin then you will be auth to go to the route
        if(Auth::user()->role == '1'){

            return $next($request);

        } else{
            // if you are not authenticated then this will display and will redirect you to homepage
            return redirect('/index')->with('message', 'ACCESS DENIED. WE SEE THAT YOU ARE NOT AN ADMIN.');
        }

        } else{
            return redirect('/login')->with('message', 'LOGIN TO ACCESS THE THIS TRANSACTION');
        }

        return $next($request);

    }
}
