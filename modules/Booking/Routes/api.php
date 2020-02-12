<?php

use Hostelry\Booking\Http\Controllers\Api\ApiSignIn;
use Hostelry\Booking\Http\Controllers\Api\CheckIn;

Route::post('/signin', ApiSignIn::class)->name('signin');

Route::group(['middleware' => 'auth:api'], function () {
    Route::post('/room/{room}/checkin', CheckIn::class)->name('room.checkin');
});
