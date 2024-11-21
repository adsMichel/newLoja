<?php
// Não estava carregando as rotas do Media
require __DIR__ . '/../Modules/Media/routes/web.php';

use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

// Auth::routes();
// Produtos
Route::get('api/products', [Controller::class, 'getProducts']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
Route::get('/turma', [App\Http\Controllers\HomeController::class, 'turma'])->name('home.turma');

Route::prefix('admin')->group(function () {
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('admin.login');
    Route::post('login', [LoginController::class, 'login'])->name('admin.post.login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    // Se você tiver registro de usuários
    Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register');
    Route::post('register', [RegisterController::class, 'register']);
    // Rotas de recuperação de senha
    Route::get('password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');
    Route::get('password/reset/{token}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
});

Route::prefix('client')->group(function(){
    Route::get('login', [LoginController::class, 'clientShowLoginForm'])->name('client.login');
    Route::post('login', [LoginController::class, 'clientLogin'])->name('client.post.login');

    // Se você tiver registro de usuários
    Route::get('register', [RegisterController::class, 'clientShowRegistrationForm'])->name('client.register');
    Route::post('register', [RegisterController::class, 'clientRegister'])->name('client.post.register');
});
