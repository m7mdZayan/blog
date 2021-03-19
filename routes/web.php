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

Route::get('posts/create',[\App\Http\Controllers\PostController::class,'create'])->name('posts.create')->middleware('auth');

Route::get('posts/store',[\App\Http\Controllers\PostController::class,'store'])->name('posts.store')->middleware('auth');

Route::get('/posts',[\App\Http\Controllers\PostController::class,'index'])->name('posts.index')->middleware('auth');

Route::put('post/{post}',[\App\Http\Controllers\PostController::class,'update'])->name('posts.update')->middleware('auth');

Route::get('/posts/{posts}',[\App\Http\Controllers\PostController::class,'show'])->name('posts.show')->middleware('auth');

Route::get('/posts/{posts}/edit',[\App\Http\Controllers\PostController::class,'edit'])->name('posts.edit')->middleware('auth');

Route::get('/posts/{posts}/confirmdelete',[\App\Http\Controllers\PostController::class,'delete'])->name('posts.delete')->middleware('auth');

Route::get('/posts/{posts}/delete',[\App\Http\Controllers\PostController::class,'destroy'])->name('posts.destroy')->middleware('auth');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
