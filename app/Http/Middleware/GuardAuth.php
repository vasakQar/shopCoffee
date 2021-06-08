<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuardAuth
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
        $guards = config('auth.guards');
//        dd($guards);
        foreach ($guards as $guard => $guard_arr){
            if (Auth::guard( $guard )->check()){
                Auth::shouldUse( $guard );
            }
        }

        if ( !Auth::check() ){
            return redirect()->route('login');
        }

        return $next($request);
    }
}
