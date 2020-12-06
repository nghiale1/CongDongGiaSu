<?php

namespace App\Http\Middleware;

use Closure;

class hocVien
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
            if(\Auth::user()->hasRole('HocVien')){

                return $next($request);
            }
        }
        return redirect()->route('404');
    }
}
