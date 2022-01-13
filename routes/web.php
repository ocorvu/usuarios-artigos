<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Rotas referentes aos posts
Route::get('/posts', [PostsController::class, 'index'])->name('posts.index');

Route::get('/posts/create', [PostsController::class, 'create'])->name('posts.create');

Route::get('posts/{post}', [PostsController::class, 'show'])->name('posts.show');

Route::post('/posts/strore', [PostsController::class, 'store'])->name('posts.store');


//Rotas referentes aos usuarios

Route::get('/users', [UsersController::class, 'index'])->name('users.index');

Route::get('/users/create', [UsersController::class, 'create'])->name('users.create');

Route::get('/users/{user}', [UsersController::class, 'show'])->name('users.show');

Route::post('/users/store', [UsersController::class, 'store'])->name('users.store');
