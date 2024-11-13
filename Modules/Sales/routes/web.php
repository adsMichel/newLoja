<?php

use Illuminate\Support\Facades\Route;
use Modules\Sales\Http\Controllers\SalesController;
use Barryvdh\DomPDF\Facade\Pdf;

Route::group([], function () {
    Route::resource('sales', SalesController::class)->names('sales');
});

Route::prefix('sales')->group(function () {
    Route::get('/', [SalesController::class, 'index'])->name('sales.index');
});

Route::get('/boleto', function () {
    $pdf = Pdf::loadView('sales::boleto');
    return $pdf->download('boleto.pdf');
});
