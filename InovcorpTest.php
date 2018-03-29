<?php

namespace Inovcorp\Test;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class InovcorpTest extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        Schema::defaultStringLength(191);
        $this->loadViewsFrom(__DIR__ . '/Views', 'inovcorp/test');
        $this->loadRoutesFrom(__DIR__ . '/web.php');
        $this->publishes([
            __DIR__.'/Migrations/' => database_path('migrations')
        ], 'inovcorp-test:migrations');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
