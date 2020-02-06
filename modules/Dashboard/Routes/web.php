<?php

use Hostelry\Dashboard\Http\Controllers\Registration\VerifyAccount;


Route::get('login', function() {})->name('login');

Route::get('/account/{owner}/validation', function () {})->name('verification');
Route::post('/account/{owner}/verify', VerifyAccount::class)->name('account.verify');
