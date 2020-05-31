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

Route::post('/auth/register', [\Strix\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::post('/auth/login', [\Strix\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/auth/oauth/{provider}', [\Strix\Http\Controllers\Auth\OAuthController::class, 'redirectToProvider']);
Route::get('/auth/oauth/callback/{provider}', [\Strix\Http\Controllers\Auth\OAuthController::class, 'handleProviderCallback']);
