<?php

namespace App\Http\Middleware;

use Closure;

class giaSu
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
        if(\Auth::check()){
            if(\Auth::user()->hasRole('GiaSu')){

                return $next($request);
            }
        }
        return redirect()->route('404');
    }
}
