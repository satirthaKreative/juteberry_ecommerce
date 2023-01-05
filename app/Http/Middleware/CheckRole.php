<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        if ($role == 'superadmin' && auth()->user()->role_action != 'superAdmin') {
            abort(403);
        }
        if ($role == 'admin' && auth()->user()->role_action != 'admin') {
            abort(403);
        }
        if ($role == 'employee' && auth()->user()->role_action != 'employee') {
            abort(403);
        }
        return $next($request);
    }
}
