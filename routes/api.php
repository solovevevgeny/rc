<?php

use App\Http\Controllers\TrainController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|


// */
Route::get("/users", [UserController::class, 'index']);
Route::get("/user/{id}", [UserController::class, 'show']);

Route::get('/trains/{user_id}', [TrainController::class, 'index']);      // all trains for user_id
Route::get('/trains/week/{user_id}', [TrainController::class, 'week']);  // all trains on WEEK for user_id
Route::post('/trains', [TrainController::class, 'create']);              // create new train
