<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Stack\GetStackController as GetStack;
use App\Http\Controllers\Stack\StackCreateController as StackCreate;
use App\Http\Controllers\Stack\StackUpdateController as StackUpdate;
use App\Http\Controllers\Stack\GetAllStacksController as GetAllStacks;
use App\Http\Controllers\Stack\StackDestroyController as StackDestroy;

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/stacks-tecnologicos/create', [StackCreate::class, 'createStack']);
    Route::post('/stacks-tecnologicos/update/{id}', [StackUpdate::class, 'updateStack']);
    Route::delete('/stacks-tecnologicos/delete/{id}', [StackDestroy::class, 'destroyStack']);
});

Route::get('/stacks-tecnologicos', [GetAllStacks::class, 'getAllStacks'])->name('api.getAllStacks');
Route::get('/stacks-tecnologicos/{id}', [GetStack::class, 'getStack'])->name('api.getStack');
