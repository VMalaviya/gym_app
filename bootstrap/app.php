<?php

use Illuminate\Foundation\Application;
use App\Http\Middleware\RedirectIfAdmin;
use App\Http\Middleware\RedirectIfEmailVerified;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\Middleware\RedirectIfAuthenticated;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            'NotAuthenticated' => RedirectIfAuthenticated::class,
            'NotEmailVerified' => RedirectIfEmailVerified::class,
            'RedirectIfAdmins' => RedirectIfAdmin::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
