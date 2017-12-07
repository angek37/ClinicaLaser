<?php

namespace App\Http\Middleware;

use Closure;

class LoginM
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
        if(session()->get('Rol') == null){
            return redirect('/');
        }else{
            return $next($request);
        }
    }
}
