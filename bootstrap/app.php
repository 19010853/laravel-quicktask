<?php

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
        $middleware->alias([
            'admin' => \App\Http\Middleware\CheckAdmin::class,
            'locale' => \App\Http\Middleware\Localization::class,
        ]);

        // Apply the localization middleware to the web middleware group so the
        // application's locale is set on every web request (after the session
        // middleware runs). This ensures Session::get('lang') is available.
        $middleware->web(append: [\App\Http\Middleware\Localization::class]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        //
    })->create();
