<?php

namespace App\Http\Middleware;

use Closure;
use Log;

class SSLProtocol
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

        Log::info("uses SSLProtocol [ ". $request->secure() . " ] route = ". $request->getRequestUri());

        if (!$request->secure() && env('APP_ENV') === 'production') {
                return redirect()->secure($request->getRequestUri());
        }

        return $next($request); 
    }
}
