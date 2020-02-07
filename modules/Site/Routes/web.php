<?php

use Hostelry\Site\Http\Controllers\Index;
use Hostelry\Site\Http\Controllers\Registration\StarterPlan;
use Hostelry\Site\Http\Controllers\Registration\ExpansionPlan;
use Hostelry\Site\Http\Controllers\Registration\DeluxePlan;

Route::get('/', Index::class)->name('index');

Route::group(['prefix' => "plan"], function () {
    Route::get('/compare', function () {})->name('pricing');

    Route::view("/starter", "site::plan.starter")->name('pricing.starter');
    Route::post('/starter/registration', StarterPlan::class)->name('pricing.starter.registration');

    Route::get("/expansion", function() {})->name('pricing.expansion');
    Route::post("/expansion/registration", ExpansionPlan::class)->name('pricing.expansion.registration');

    Route::get("/deluxe", function() {})->name('pricing.deluxe');
    Route::post("/deluxe/registration", DeluxePlan::class)->name('pricing.deluxe.registration');
});
