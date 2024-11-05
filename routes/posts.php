<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PostController::class, 'index']);
Route::get('/create', [PostController::class, 'create']);
Route::get('/edit/{id}', [PostController::class, 'edit']);
Route::post('/new', [PostController::class, 'createOne']);
Route::post('/update/{id}', [PostController::class, 'update']);

// Rout with params
Route::get('/{id}', [PostController::class, 'show']);