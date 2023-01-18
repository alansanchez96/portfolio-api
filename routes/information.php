<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Information\GetInformationController as GetInformation;
use App\Http\Controllers\Information\GetAllInformationController as GetAllInformation;
use App\Http\Controllers\Information\InformationCreateController as InformationCreate;
use App\Http\Controllers\Information\InformationUpdateController as InformationUpdate;

Route::group(['middleware' => 'auth:sanctum'], function () {
    Route::post('information/create', [InformationCreate::class, 'createInformation']);
    Route::post('information/update/{id}', [InformationUpdate::class, 'updateInformation']);
});

Route::get('/information/{id}', [GetInformation::class, 'getInformation'])->name('api.getInformation');
Route::get('/information', [GetAllInformation::class, 'getAllInformations'])->name('api.getAllInformations');
