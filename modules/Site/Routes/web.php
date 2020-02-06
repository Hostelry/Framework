<?php

use Hostelry\Site\Http\Controllers\Index;

Route::get('/', Index::class)->name('index');

Route::group(['prefix' => "plan"], function () {
    Route::get('/compare', function () {})->name('pricing');
    Route::get("/starter", function() {})->name('pricing.starter');
    Route::get("/expansion", function() {})->name('pricing.expansion');
    Route::get("/deluxe", function() {})->name('pricing.deluxe');
});
