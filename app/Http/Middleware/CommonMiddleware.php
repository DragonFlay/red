<?php

namespace App\Http\Middleware;

use Closure;

class CommonMiddleware
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
        $rule = DB::table("rule")->where("status","=","1")->get();
        
        return $next($request);
    }
}
