<?php

use App\Themes\Application\Controller\FetchThemeController;

Route::group(['prefix' => 'theme'], function () {
    Route::get('/', FetchThemeController::class);
});