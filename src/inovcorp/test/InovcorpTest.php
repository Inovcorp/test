<?php

namespace Inovcorp\Test;

use Illuminate\Support\ServiceProvider;

class InovcorpTest extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot() {
        $this->loadViewsFrom(__DIR__ . '/Views', 'inovcorp/test');
        $this->loadRoutesFrom(__DIR__ . '/web.php');
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
