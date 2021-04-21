<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsUser
{
    public function handle(Request $request, Closure $next)
    {
        if(auth()->user()->is_admin==1 or null){
            return $next($request);
        }
        $error = 'User isnt normal user';

        return response()->json(compact('error'));
    }
}
