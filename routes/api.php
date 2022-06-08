<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

Route::post('/register/{usertype_id}', [UserController::class, 'signUp']);
Route::post('/login', [UserController::class, 'login']);
Route::post('/edit_profile/{id}', [UserController::class, 'editProfile']);


Route::get('/users', [AdminController::class, 'getAllUsers']);

Route::post('/add_resto', [AdminController::class, 'addResto']);
Route::get('/restaurants/{id?}', [AdminController::class, 'getAllRestos']);

Route::post('/submit_reviews', [UserController::class, 'submitReviews']);
Route::get('/reviews', [AdminController::class, 'getAllReviews']);
Route::post('/reject_review/{id}', [AdminController::class, 'rejectReview']);
Route::post('/accept_review/{id}', [AdminController::class, 'acceptReview']);


