<?php

namespace AnyImage\Clickable;

use Illuminate\Support\ServiceProvider;

class ClickableServiceProvider extends ServiceProvider {
    /**
     * Register services.
     *
     * @return  void
     */
    public function register() {

        if ( $this->app->runningInConsole() ) {
            $this->publishes( [
                __DIR__ . '/../config/config.php' => config_path( 'laravel-clickable.php' ),
            ], 'config' );
        }

    }

    /**
     * Bootstrap services.
     *
     * @return  void
     */
    public function boot() {
        $this->loadMigrationsFrom( __DIR__ . '/../database/migrations' );
        $this->mergeConfigFrom( __DIR__ . '/../config/config.php', 'laravel-clickable' );
    }
}
