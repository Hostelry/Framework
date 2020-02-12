<?php

use Hostelry\Room\Http\Controllers\Api\ShowAll;

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('/all', ShowAll::class)->name('show.all');
});
