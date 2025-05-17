<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;
use App\Utils\Casting as UtilsCasting;

// Route::get('/home', HomeController::class);

Route::get('/', [PostController::class, 'home'])
->name("posts.home");

Route::get('/posts', [PostController::class, 'home'])
->name("posts.home");


Route::get('/posts/create', [PostController::class, 'createPost'])
->name("posts.create");

Route::post('/posts/create/postCreated', [PostController::class, 'postCreated'])
->name('posts.created');

Route::get('/posts/{post}', [PostController::class, 'postsById'])
->name('posts.postsById');

Route::get('/posts/{post}/editPost', [PostController::class, 'editPost'])
->name('posts.edit');


Route::put('/posts/{post}', [PostController::class, 'postEdited'])
->name('posts.edited');

Route::delete('/posts/{post}', [PostController::class, 'deletePost'])
->name('posts.delete');
// Route::get('/posts/{post}/{category}', [PostController::class, 'postsCategory']);
