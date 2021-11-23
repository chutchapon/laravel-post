<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::get('/create', [HomeController::class, 'create']);


// Route::post('/store', [HomeController::class, 'store']);

// Route::get('/edit/{id}',[HomeController::class, 'edit']);

// Route::post('/update', [HomeController::class, 'update']);

// Route::get('/delete/{id}', [HomeController::class, 'delete']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
