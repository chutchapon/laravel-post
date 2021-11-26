<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/create', [App\Http\Controllers\HomeController::class, 'create']);
Route::post('/store', [App\Http\Controllers\HomeController::class, 'store']);
