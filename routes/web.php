<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use GuzzleHttp\Middleware;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('auth')->group(function () {
    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [AuthController::class, 'index'])->name('admin.index');
        Route::get('/admin/users/edit/{id}', [AuthController::class, 'edit'])->name('admin.users.edit');
        Route::post('/admin/users/update/{id}', [AuthController::class, 'update'])->name('admin.users.update');
        Route::delete('/admin/users/delete/{id}', [AuthController::class, 'destroy'])->name('admin.users.delete');
    });
});




