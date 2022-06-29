<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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
    return $request->user();
});

Route::prefix('give')->group(function () {
    Route::post('/success', function () {
        return response('OK', 200);
    });

    Route::post('/failure', function () {
        return response('OK', 200);
    });

    Route::post('/cancel', function () {
        return response('OK', 200);
    });
});
