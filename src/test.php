<?php

class test.php {
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot() {
        $this->loadRoutesFrom(__DIR__.'/routes.php');
    }
}
