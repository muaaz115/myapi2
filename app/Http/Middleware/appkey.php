<?php

namespace App\Http\Middleware;

use Closure;

class appkey
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
        // $token = $request->header('APP_KEY');
        // if ($token != '12345678'){
        //     return response()->json(['message'=>'app key not found'], 404 );
        // }

        return $next($request);
    }
}
