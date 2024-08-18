<?php

namespace Jeffreyvr\PaverForLaravel\Middleware;

use Closure;
use Jeffreyvr\Paver\Paver;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PaverMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        app()->make(Paver::class);

        return $next($request);
    }
}
