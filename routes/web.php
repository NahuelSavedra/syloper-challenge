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

Route::get('/contact',[\App\Http\Controllers\ContactController::class,'show'])->name('contact.show');
Route::post('/contact',[\App\Http\Controllers\ContactController::class,'store'])->name('contact.store');

Route::get('/',[\App\Http\Controllers\PostController::class,'index'])->name('posts.index');
Route::post('/',[\App\Http\Controllers\PostController::class,'store'])->name('posts.store');
Route::get('/create',[\App\Http\Controllers\PostController::class,'create'])->name('posts.create');
Route::get('/{post}',[\App\Http\Controllers\PostController::class,'show'])->name('posts.show');
Route::delete('/{post}',[\App\Http\Controllers\PostController::class,'destroy'])->name('posts.destroy');
Route::get('/{post}/edit',[\App\Http\Controllers\PostController::class,'edit'])->name('posts.edit');
Route::put('/{post}/edit',[\App\Http\Controllers\PostController::class,'update'])->name('posts.update');

