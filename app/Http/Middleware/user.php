<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class user {

    public function handle($request, Closure $next) {
        if (!Auth::guest()) {
            return $next($request);
        }
        return redirect('/login');
    }

}
