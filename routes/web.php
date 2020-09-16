<?php
declare(strict_types=1);

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


Route::get('/test', function () {
    return view('pages.test');
});

Route::post('/test', function () {
    dd(clean(request()->get('content')));
});

Route::get('/', function () {
    return view('pages.index');
});

Route::post('/auth/oauth/{provider}', [\Strix\Http\Controllers\Auth\OAuthController::class, 'redirectToProvider']);
Route::get('/auth/oauth/callback/{provider}', [\Strix\Http\Controllers\Auth\OAuthController::class, 'handleProviderCallback']);


Route::group(['prefix' => 'forums'], function () {
    Route::get('/', function () {
        return view('pages.forum.index');
    });

    Route::get('category/some-category', function () {
        return view('pages.forum.category.show');
    });

    Route::get('board/some-board', function () {
        return view('pages.forum.board.show');
    });

    Route::get('thread/some-thread', function () {
        return view('pages.forum.thread.show');
    });
});
