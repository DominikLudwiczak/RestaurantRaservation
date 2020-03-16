<?php

namespace App\Http\Middleware;

use Closure;

class CheckRezerwacja
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
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'persons' => 'required|min:0',
        ]);
        return $next($request);
    }
}
