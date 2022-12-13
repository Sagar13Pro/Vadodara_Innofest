<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SessionChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(!session()->has('session_mail')){
            return redirect(route('hackathon.logins'));
        }
        if(session()->has('session_mail')){
            return $next($request);
        } 
        
    }
}
