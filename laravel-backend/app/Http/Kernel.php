<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middlewareGroups = [
        'api' => [
            \Laravel\Sanctum\Http\Middleware\EnsureFrontendRequestsAreStateful::class,
            'throttle:api',
            \Illuminate\Routing\Middleware\SubstituteBindings::class,
        ],
    ];

    protected $routeMiddleware = [
        // Laravel default middleware...
        'auth' => \App\Http\Middleware\Authenticate::class,
        'guest' => \Illuminate\Auth\Middleware\RedirectIfAuthenticated::class,

        // Custom role-based middleware
        'admin' => \App\Http\Middleware\IsAdmin::class,
        'employee' => \App\Http\Middleware\IsEmployee::class,
        'customer' => \App\Http\Middleware\IsCustomer::class,
    ];
}

