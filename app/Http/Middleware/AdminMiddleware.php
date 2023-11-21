<?php
namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (auth()->check()) {
            if(auth()->user()->role=='admin'){
                return $next($request);
            }
            return $next($request);
        }

        return redirect()->to('/iniciarsesion');
    }
}