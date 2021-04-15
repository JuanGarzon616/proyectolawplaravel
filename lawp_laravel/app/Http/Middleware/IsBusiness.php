<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsBusiness
{

    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->is_admin==2){
            return $next($request);
        }
        $error = 'User isn business';

        return response()->json(compact('error'));
    }
}
