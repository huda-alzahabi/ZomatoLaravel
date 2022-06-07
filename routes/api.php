<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\RestoController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
