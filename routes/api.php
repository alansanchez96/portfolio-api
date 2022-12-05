<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::controller(AuthController::class)->group(function () {
    Route::post('/user/login', 'login');
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user/profile', [AuthController::class, 'userProfile']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::controller(MessageController::class)->group(function () {
    Route::post('/contact/message', 'contact');
});
