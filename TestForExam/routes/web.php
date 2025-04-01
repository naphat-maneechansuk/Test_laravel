<?php

use App\Http\Controllers\UserController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Route;

Route::get('/data', [UserController::class ,'show']);
Route::get('/create_view' , [UserController::class ,'index']);
Route::post('/create_view' , [UserController::class ,'Create']);
Route::get('/data/{id}' , [UserController::class ,'edit_view']);
Route::put('/data/{id}' , [UserController::class ,'edit']);

Route::delete('/data', [UserController::class ,'delete']);
