<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::post('/register/{usertype_id}', [UserController::class, 'signUp']);
Route::post('/add_resto', [AdminController::class, 'addResto']);
Route::get('/restaurants', [AdminController::class, 'getAllRestos']);
Route::get('/users', [AdminController::class, 'getAllUsers']);
