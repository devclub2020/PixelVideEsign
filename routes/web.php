<?php

use Illuminate\Support\Facades\Route;
use PixelVide\PixelVideEsign\Http\Controllers\EsignController;

Route::group([
    'prefix' => 'esign',
    'middleware' => ['web']
], function () {
    Route::post('/callback', [EsignController::class, 'callback']);
    Route::get('/error', [EsignController::class, 'error']);
});
