<?php

namespace Jenssegers\AB\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RunABTest
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        // Start the A/B tracking
        app('ab')->track($request);

        return $next($request);
    }
}
