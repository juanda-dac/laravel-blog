<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

// Route::get('/posts', [PostController::class, 'allPosts']);
// Route::get('/posts/create', [PostController::class, 'create']);
// Route::get('/posts/create-one', [PostController::class, 'createOne']);
// Route::get('/posts/find-all', [PostController::class, 'findAll']);
// Route::get('/posts/reset', [PostController::class, 'resetAll']);
// Route::get('/posts/{id}', [PostController::class, 'show']);


