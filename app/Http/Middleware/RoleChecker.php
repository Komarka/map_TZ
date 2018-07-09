<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RoleChecker
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,...$roles)
    {
             if(Auth::user()->role()->get()->isEmpty()){
                return redirect()->route('register');
             }

           if(!in_array(Auth::user()->role()->get()[0]->role,$roles)){
            return redirect()->route('register');
           }

        
       
        return $next($request);
    }
}
