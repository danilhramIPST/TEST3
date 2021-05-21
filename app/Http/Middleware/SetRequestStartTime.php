<?php

namespace App\Http\Middleware;

use Closure;

class SetRequestStartTime
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->attributes->set("start_time", now());

        return $next($request);
    }
}
