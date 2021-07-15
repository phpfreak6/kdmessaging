<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class admin {

    public function handle($request, Closure $next) {
        if (!Auth::guest()) {
            if (Auth::user()->admin == 1) {
                return $next($request);
            }
            return redirect('/admin')->with('error', 'Please Login First');
        }
        return redirect('/admin')->with('error', 'Please Login First');
    }

}
