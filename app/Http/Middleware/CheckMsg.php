<?php

namespace App\Http\Middleware;

use Closure;

class CheckMsg
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

        $request->validate([
            'mail' => 'email',
            'wiadomosc' => 'required',
        ]);
        return $next($request);
    }
}
