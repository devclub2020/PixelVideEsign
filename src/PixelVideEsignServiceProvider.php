<?php

namespace PixelVide\PixelVideEsign;

use Illuminate\Support\ServiceProvider;

class PixelVideEsignServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/esign.php',
            'esign'
        );
    }

    public function boot()
    {
        // Load routes
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        // Load views
        $this->loadViewsFrom(
            __DIR__ . '/../resources/views',
            'pixelvide-esign'
        );

        // Publish config (optional)
        $this->publishes([
            __DIR__ . '/../config/esign.php' => config_path('esign.php'),
        ], 'pixelvide-esign-config');

        // Publish views (optional)
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/pixelvide-esign'),
        ], 'pixelvide-esign-views');
    }
}
