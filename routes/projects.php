<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Project\GetProjectController as GetProject;
use App\Http\Controllers\Project\ProjectCreateController as ProjectCreate;
use App\Http\Controllers\Project\ProjectUpdateController as ProjectUpdate;
use App\Http\Controllers\Project\GetAllProjectsController as GetAllProjects;
use App\Http\Controllers\Project\ProjectDestroyController as ProjectDestroy;

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('/projects/create', [ProjectCreate::class, 'createProject']);
    Route::post('/projects/update/{id}', [ProjectUpdate::class, 'updateProject']);
    Route::delete('/projects/delete/{id}', [ProjectDestroy::class, 'destroyProject']);
});

Route::get('/projects', [GetAllProjects::class, 'getAllProjects'])->name('api.getAllProjects');
Route::get('/project/{id}', [GetProject::class, 'getProject'])->name('api.getProject');
