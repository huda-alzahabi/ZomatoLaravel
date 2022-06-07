<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RestoController;


Route::post('/add_resto', [RestoController::class, 'addResto']);

