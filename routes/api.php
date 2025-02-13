<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\signageController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/form',[FormController::class,'index']);
Route::post('/form',[FormController::class,'store']);

Route::get('/signage',[signageController::class,'index']);
Route::post('/signage',[signageController::class, 'store']);