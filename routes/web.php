<?php

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
    return view('index');
});

Route::get('posts/create',[\App\Http\Controllers\PostController::class,'create'])->name('posts.create');

Route::get('/posts',[\App\Http\Controllers\PostController::class,'index'])->name('posts.index');

Route::get('/posts/{posts}/edit',[\App\Http\Controllers\PostController::class,'edit'])->name('posts.edit');

Route::get('/posts/{posts}/delete',[\App\Http\Controllers\PostController::class,'destroy'])->name('posts.destroy');

Route::get('/posts/{posts}',[\App\Http\Controllers\PostController::class,'show'])->name('posts.show');

