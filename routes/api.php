<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Message\MessageController;

require __DIR__ . '/projects.php';
require __DIR__ . '/stacks.php';

Route::controller(AuthController::class)->group(function () {
    Route::post('/user/login', 'login');
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::controller(MessageController::class)->group(function () {
    Route::post('/contact/message', 'contact');
});
