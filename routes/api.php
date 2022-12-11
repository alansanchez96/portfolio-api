<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Stack\StackController;
use App\Http\Controllers\Message\MessageController;
use App\Http\Controllers\Project\ProjectCreateController;
use App\Http\Controllers\Project\ProjectUpdateController;
use App\Http\Controllers\Project\GetAllProjectsController;
use App\Http\Controllers\Project\ProjectDestroyController;

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

require __DIR__ . '/projects.php';

Route::controller(AuthController::class)->group(function () {
    Route::post('/user/login', 'login');
});

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::get('/user/profile', [AuthController::class, 'userProfile']);
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::post('/stacks-tecnologicos/create', [StackController::class, 'craeteStack']);
    Route::post('/stacks-tecnologicos/update/{id}', [StackController::class, 'updateStack']);
    Route::delete('/stacks-tecnologicos/delete/{id}', [StackController::class, 'destroyStack']);
});

Route::controller(MessageController::class)->group(function () {
    Route::post('/contact/message', 'contact');
});

Route::get('/stacks-tecnologicos', [StackController::class, 'getAllStacks']);
