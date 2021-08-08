<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/posts',[\App\Http\Controllers\API\PostApiController::class,'index']);
Route::get('/posts/{post}',[\App\Http\Controllers\API\PostApiController::class,'show']);
Route::delete('/posts/{post}/delete',[\App\Http\Controllers\API\PostApiController::class,'destroy']);


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
