<?php

use Hostelry\Dashboard\Http\Controllers\Registration\VerifyAccount;
use Hostelry\Dashboard\Http\Controllers\Registration\ResendConfirmationEmail;
use Hostelry\Dashboard\Http\Controllers\Registration\AccountValidation;
use Hostelry\Dashboard\Http\Controllers\SignIn;
use Hostelry\Dashboard\Http\Controllers\Index;


Route::group(['middleware' => 'guest'], function () {
    Route::view('login', "dashboard::login")->name('login');
    Route::post('login', SignIn::class)->name('login');

    Route::get('/account/{owner}/validation', AccountValidation::class)->name('verification');
    Route::post('/account/{owner}/verify', VerifyAccount::class)->name('account.verify');
    Route::post('/account/{owner}/resend-email', ResendConfirmationEmail::class)->name('email.resend');
});

Route::group(['middleware' => 'auth:dashboard'], function () {
    Route::get('/', function() {
        return redirect()->route('dashboard.index');
    });

    Route::get("/overview", Index::class)->name('index');
});
