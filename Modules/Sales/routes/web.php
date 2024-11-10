<?php

use Illuminate\Support\Facades\Route;
use Modules\Sales\Http\Controllers\SalesController;

Route::group([], function () {
    Route::resource('sales', SalesController::class)->names('sales');
});

Route::prefix('sales')->group(function () {
    Route::get('/', [SalesController::class, 'index'])->name('sales.index');
});
