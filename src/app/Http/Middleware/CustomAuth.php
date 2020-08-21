<?php

namespace App\Http\Middleware;

use Closure;

use function Ramsey\Uuid\v1;

class CustomAuth
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
        if (session()->exists('user')) {
            return $next($request);
        } else {
            return redirect()->route('login');
        }
    }
}
