<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Utils\Casting as UtilsCasting;

// Route::get('/home', HomeController::class);

Route::get('/', [PostController::class, 'home']);
Route::get('/posts', [PostController::class, 'home']);
Route::get('/posts/create', [PostController::class, 'createPost']);
Route::post('/posts/create/postCreated', [PostController::class, 'postCreated']);

Route::get('/posts/{post}', [PostController::class, 'postsById']);
Route::get('/posts/{post}/editPost', [PostController::class, 'editPost']);
Route::put('/posts/{post}', [PostController::class, 'postEdited']);

Route::delete('/posts/{post}', [PostController::class, 'deletePost']);
// Route::get('/posts/{post}/{category}', [PostController::class, 'postsCategory']);
