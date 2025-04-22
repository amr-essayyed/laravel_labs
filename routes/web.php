<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

//! posts
Route::get('/posts',            [PostController::class, 'index'] )  ->name('users.index');   // ✅
Route::get('/posts/create',     [PostController::class, 'create'] ) ->name('users.create');  // ✅
Route::post('/posts',           [PostController::class, 'store'] )  ->name('users.store');   // ✅
Route::get('/posts/{id}',       [PostController::class, 'show'] )   ->name('users.show');    // ✅
Route::get('/posts/edit/{id}',  [PostController::class, 'edit'] )   ->name('users.edit');    // ✅
Route::put('/posts/{id}',       [PostController::class, 'update'] ) ->name('users.update');  // ✅
Route::delete('/posts/{id}',    [PostController::class, 'destroy'] )->name('users.destroy');


Route::fallback(function () {
 return view('notfound');
 });