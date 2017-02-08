<?php

namespace M1guelpf\LaravelSSL;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LaravelSSLServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(Router $router)
    {
        $router->aliasMiddleware('https', \M1guelpf\LaravelSSL\HttpsMiddleware::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //
    }
}
