<?php

use App\Http\Controllers\User\UserApiController;
use App\Http\Controllers\ProductApiController;
use App\Http\Controllers\CategoryApiController;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function() {
    Route::apiResource('users', UserApiController::class); 
    Route::apiResource('categories', CategoryApiController::class);
    Route::apiResource('products', ProductApiController::class);
});