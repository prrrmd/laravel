<?php

namespace App\Http\Middleware;

use Closure;

class checkCredentials
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
        if(!session()->has('data'))
        {
            return redirect('facebook');
        }
        
        return $next($request);
    }
}