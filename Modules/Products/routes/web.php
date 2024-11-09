<?php

use Illuminate\Support\Facades\Route;
use Modules\Products\Http\Controllers\ProductsController;


Route::prefix('products')->group(function () {
    Route::get('/carrinho', [ProductsController::class,'index'])->name('carrinho.index');
});
