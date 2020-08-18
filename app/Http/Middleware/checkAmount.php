<?php

namespace App\Http\Middleware;

use Closure;

class checkAmount
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
        if($request->amount && $request->amount<500)
        {
            return redirect('unauthorised');
        }
        return $next($request);
    }
}
