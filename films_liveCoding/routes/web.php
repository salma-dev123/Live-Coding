<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;

Route::get('/',[MovieController::class, 'index']);
Route::post('/movies',[MovieController::class, 'store']);
Route::delete('/movies/{movie}',[MovieController::class, 'destroy']);