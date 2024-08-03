<?php

use App\Http\Controllers\Api\VacancyApiController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/jobs', [VacancyApiController::class, 'index']);
Route::get('/vacancies/{id}', [VacancyApiController::class, 'show']);

Route::post('/token', [ProfileController::class, 'auth']);
