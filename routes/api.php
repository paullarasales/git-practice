<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

<<<<<<< HEAD
Route::apiResource('/employee', EmployeeController::class);
=======
 Route::apiResource('products',ProductController::class);
>>>>>>> 0ccc00d9fc9e28a060769312f847060d92d39dce
