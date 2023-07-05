<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class rolemiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        // if (auth()->user()->hasRole('admin')) {
        //     return view('home');
        //     // return redirect()->route('dashboard-sass');
        // }
        // elseif(auth()->user()->hasRole('user')){
        //     return view('dashboard-sass');
        // }
        // return $next($request);
    }
}
