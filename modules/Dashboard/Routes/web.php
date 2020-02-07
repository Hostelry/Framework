<?php

use Hostelry\Dashboard\Http\Controllers\Registration\VerifyAccount;
use Hostelry\Dashboard\Http\Controllers\Registration\ResendConfirmationEmail;
use Hostelry\Dashboard\Http\Controllers\Registration\AccountValidation;


Route::get('login', function() {})->name('login');

Route::get('/account/{owner}/validation', AccountValidation::class)->name('verification');
Route::post('/account/{owner}/verify', VerifyAccount::class)->name('account.verify');
Route::post('/account/{owner}/resend-email', ResendConfirmationEmail::class)->name('email.resend');
