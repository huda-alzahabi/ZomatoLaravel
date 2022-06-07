<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::post('/register/{user_type_id}', [UserController::class, 'signUp']);
Route::post('/add_resto', [AdminController::class, 'addResto']);
