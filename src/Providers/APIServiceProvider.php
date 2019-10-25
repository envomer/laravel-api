<?php

namespace Envomer\API\Providers;

use Envomer\API\API;
use Envomer\API\Handler;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class APIServiceProvider extends LaravelServiceProvider
{
    public $singletons = [
        API::class,
        Handler::class
    ];

    public function boot()
    {

    }

    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config.php', 'api'
        );

        $this->loadRoutesFrom(
            __DIR__.'../routes.php'
        );
    }

}
