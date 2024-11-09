<?php

use Illuminate\Support\Facades\Route;
use Modules\Sales\Http\Controllers\SalesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('sales')->group(function () {
    Route::get('/sale', [SalesController::class,'index'])->name('sale.index');
    Route::get('/comprovante', [SalesController::class,'comprovante'])->name('comprovante');
});

/*
Route::group([], function () {
    Route::resource('sales', SalesController::class)->names('sales');
});
*/
