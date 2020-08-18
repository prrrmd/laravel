<?php

namespace App\Http\Middleware;

use Closure;

class checkAge #add this class path to kernel.php in line 56(as individual middleware)
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
        if($request->age && $request->age<20)
        {
            return redirect('unauthorised');
        }
        return $next($request);
    }
}
