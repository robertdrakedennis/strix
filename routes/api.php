<?php
declare(strict_types=1);

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return new \Strix\Http\Resources\Users\DefaultUserResource(auth()->user());
});

Route::get('/forums/threads/latest', function () {
    return response()->json([
        'data' => [
            new \Strix\Http\Resources\Forum\Thread\DefaultThreadResource($this),
            new \Strix\Http\Resources\Forum\Thread\DefaultThreadResource($this),
            new \Strix\Http\Resources\Forum\Thread\DefaultThreadResource($this),
            new \Strix\Http\Resources\Forum\Thread\DefaultThreadResource($this),
        ]
    ]);
})->middleware('auth:sanctum');
