<?php

namespace PixelVide\PixelVideEsign;

use Illuminate\Support\ServiceProvider;

class PixelVideEsignServiceProvider extends ServiceProvider
{
    public function register()
    {
        // For future bindings
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'pixelvide-esign');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/pixelvide-esign'),
        ], 'pixelvide-esign-views');
    }
}
