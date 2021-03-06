<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckUserIsActive
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
        // dd( 'got', Auth::check());
        if(Auth::check() && Auth::user()-> status == 1){
            return $next($request);
        }
        else{
            Auth::logout();
            return redirect('/login')->with('warning','your account is deactivated');
        }
       
    }
}
