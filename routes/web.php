<?php

use Illuminate\Support\Facades\Route;
use PixelVide\PixelVideEsign\Http\Controllers\EsignController;

/*
|--------------------------------------------------------------------------
| PixelVideEsign Web Routes
|--------------------------------------------------------------------------
| All routes are session-based
*/

Route::group([
    'prefix' => config('esign.route_prefix'),
    'middleware' => ['web'],
], function () {

    /**
     * Save bill details (returns data, session-based)
     */
    Route::post(
        '/save_bill_det',
        [EsignController::class, 'saveBillDetails']
    );

    /**
     * eSign redirect (browser flow)
     */
    Route::post(
        '/eSignRedirect/{hrmstoken}/{esigntxnid}',
        [EsignController::class, 'eSignRedirect']
    );

    /**
     * Callback from eSign service
     */
    Route::post(
        '/callback',
        [EsignController::class, 'callback']
    );

    /**
     * Error page
     */
    Route::get(
        '/error',
        [EsignController::class, 'error']
    );

});
