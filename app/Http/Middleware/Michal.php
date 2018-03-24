<?php

namespace App\Http\Middleware;

use Closure;

class Michal
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
        dump($request->user());

//        if(!request->user())
        echo 'aassas';
        return $next($request);
    }
}
