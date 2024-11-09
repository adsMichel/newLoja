<?php

use Illuminate\Support\Facades\Route;
use Modules\Home\Http\Controllers\HomeController;

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

Route::prefix('home')->group(function () {
    Route::get('/home', [HomeController::class,'index'])->name('home.index');
});

/*
Route::group([], function () {
    Route::resource('home', HomeController::class)->names('home');
});
*/
