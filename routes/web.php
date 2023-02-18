<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;


Route::get('/product/create', [ProductController::class, 'create']);
Route::post('/product/create', [ProductController::class, 'store']);
Route::get('/product/{product}/view', [ProductController::class, 'view']);
Route::get('/product/{product}/edit', [ProductController::class, 'updateView']);
Route::post('/product/{product}/edit', [ProductController::class, 'updateMake']);
Route::post('/product/{product}/delete', [ProductController::class, 'delete']);
Route::get('/product/list', [ProductController::class, 'list']);
