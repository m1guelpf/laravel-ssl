<?php

namespace M1guelpf\LaravelSSL;

use Closure;

class HttpsMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$request->server('HTTP_X_FORWARDED_PROTO') == 'https' && env('APP_ENV') === 'prod') {
            return redirect()->secure($request->getRequestUri());
        }
        return $next($request);
    }
}
