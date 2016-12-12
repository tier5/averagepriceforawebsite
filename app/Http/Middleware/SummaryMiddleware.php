<?php

namespace App\Http\Middleware;

use Closure;
use Session;

class SummaryMiddleware
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
        if (Session::has('step')) {
            return $next($request); 
        }
        else
        {
            return redirect()->route('index');
        }
    }
}
