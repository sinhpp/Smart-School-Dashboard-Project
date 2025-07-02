<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsCustomer
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->user()->role->name !== 'customer') {
            return response()->json(['message' => 'Unauthorized (customer only)'], 403);
        }

        return $next($request);
    }
}
