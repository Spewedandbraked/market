<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, $asked): Response
    {
        //dd($asked);
        //dd($request->user()->permissions);
        foreach ($request->user()->permissions as $key => $permission) {
            //dd($permission);
            if($permission->name == $asked) {
                return $next($request);
            }
        }
        abort(404);
    }
}
