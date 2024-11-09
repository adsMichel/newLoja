<?php

use Illuminate\Support\Facades\Route;
use Modules\Products\Http\Controllers\ProductsController;


// Route::group([], function () {
//     Route::resource('products', ProductsController::class)->names('products');
// });

Route::prefix('product')->group(function () {
    Route::get('/', [ProductsController::class, 'index'])->name('product.index');
    Route::get('create', [ProductsController::class, 'create'])->name('product.create');
    Route::post('store', [ProductsController::class, 'store'])->name('product.store');
    Route::get('edit/{id}', [ProductsController::class, 'edit'])->name('product.edit');
    Route::put('update/{id}', [ProductsController::class, 'update'])->name('product.update');
    Route::get('show', [ProductsController::class, 'show'])->name('product.show');
    Route::delete('destroy/{id}', [ProductsController::class, 'destroy'])->name('product.destroy');
    Route::get('os', [ProductsController::class, 'os'])->name('product.os');
});
