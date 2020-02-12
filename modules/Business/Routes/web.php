<?php

use Hostelry\Business\Http\Controllers\DetailController;
use Hostelry\Business\Http\Controllers\BranchDetailController;

Route::get('/{business}/detail', DetailController::class)->name('business.detail');

Route::get('/{business}/branch/{branch}/detail', BranchDetailController::class)->name('branch.detail');
