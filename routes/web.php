<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('category', CategoryController::class);

Route::get('post', [PostController::class, 'index']);
Route::get('/{anypath}', [PostController::class, 'index'])->where('path','.*');

Route::resource('tag', TagController::class);