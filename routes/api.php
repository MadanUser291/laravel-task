<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/user-login', [UserController::class, 'login']);
Route::post('/user-register', [UserController::class, 'register']);
Route::get('/email/verify/{id}/{hash}', [UserController::class, 'verifyEmail'])->name('verification.verify');

Route::middleware('auth:api')->group(function () {
    Route::post('/profile-update', [UserController::class, 'updateProfile']);
});
