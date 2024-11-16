<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Middleware\SiteSettingMiddleware;
use App\Http\Middleware\PanelSettingMiddleware;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        api: __DIR__.'/../routes/api.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
        then: function () {
            Route::middleware('web')
            ->group(base_path('routes/panel.php'));
        },
    )

    ->withMiddleware(function (Middleware $middleware) {
        $middleware->alias([
            "sitesetting"=>SiteSettingMiddleware::class,
            "panelsetting"=>PanelSettingMiddleware::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
