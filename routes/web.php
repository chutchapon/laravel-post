<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);
Route::get('/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('/store', [App\Http\Controllers\PostController::class, 'store']);
Route::get('/edit/{id}', [App\Http\Controllers\PostController::class, 'edit']);
