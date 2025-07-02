<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsEmployee
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role->name !== 'employee') {
            return response()->json(['message' => 'Unauthorized (employee only)'], 403);
        }

        return $next($request);
    }
}
