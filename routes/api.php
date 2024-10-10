<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
<<<<<<< HEAD

<<<<<<< HEAD
Route::apiResource('/employee', EmployeeController::class);
=======
 Route::apiResource('products',ProductController::class);
>>>>>>> 0ccc00d9fc9e28a060769312f847060d92d39dce
=======
>>>>>>> parent of 218f593... employee crud
