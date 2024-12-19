<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\IneController;
use App\Models\Ines;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/users/{id}', [UsersController::class, 'show']);
Route::post('/users', [UsersController::class, 'store']);
Route::get('/inelist', [IneController::class, 'showine']);
Route::get('/ine', [IneController::class, 'index']);