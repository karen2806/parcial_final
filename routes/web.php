<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProducerController;
use App\Http\Controllers\WelcomeController;


Route::resource('/', WelcomeController::class);
Route::resource('/movies', MovieController::class);
Route::resource('/producers', ProducerController::class);
