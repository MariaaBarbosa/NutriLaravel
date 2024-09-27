<?php

use App\Http\Controllers\InspectorController;
use App\Http\Controllers\NutritionistController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// nutritionist
Route::post('/nutritionist/store', [NutritionistController::class, 'store']); 
Route::get('/nutritionist/test', [NutritionistController::class, 'test']); 

// student
Route::post('/student/store', [StudentController::class, 'store']);
Route::get('/student/test', [StudentController::class, 'test']); //funciona

// inspector
Route::post('/inspector/store', [InspectorController::class, 'store']); 
Route::get('/inspector/test', [InspectorController::class, 'test']); 
