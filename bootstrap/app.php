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
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->validatecsrfTokens(except:[
            'https://models_catabayjoshua.test/student',
            'https://models_catabayjoshua.test/student/31'
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
