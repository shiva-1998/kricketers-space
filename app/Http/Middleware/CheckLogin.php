<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle($request, Closure $next)
    {
        if (!Auth::guard('user')->check()) {
            // return redirect()->route('admin.login');
            abort(response()->json([
                'message' => 'unauthorises'
            ], 401));
        }

        return $next($request);
    }
}
