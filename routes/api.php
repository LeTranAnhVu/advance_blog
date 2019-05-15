<?php

use Illuminate\Http\Request;

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
//base route : /api/
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('v1')->namespace('Api/v1')->name('api.v1.')->group(function () {
    Route::prefix('auth')->namespace('Api/v1/Auth')->name('api.v1.auth')->group(function () {
        Route::get('login','ApiAuthController@login');
    });
});
