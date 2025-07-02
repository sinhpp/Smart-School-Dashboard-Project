<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role->name !== 'admin') {
            return response()->json(['message' => 'Unauthorized (admin only)'], 403);
        }

        return $next($request);
    }
}
