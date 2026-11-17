<?php

use App\Http\Middleware\ApplySiteSettings;
use App\Http\Middleware\EnsureDashboardAuthenticated;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->trimStrings(except: ['inbox_password']);
        $middleware->web(append: [ApplySiteSettings::class]);
        $middleware->alias([
            'dashboard.auth' => EnsureDashboardAuthenticated::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->dontFlash(['inbox_password']);
    })->create();
