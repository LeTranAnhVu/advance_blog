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

Route::prefix('v1')->namespace('Api\v1')->name('api.v1.')->group(function () {
    Route::prefix('auth')->namespace('Auth')->name('auth.')->group(function () {
        Route::post('login', 'ApiAuthController@login');
        Route::post('logout', 'ApiAuthController@logout');
        Route::get('test-permission', 'ApiAuthController@test')->middleware(['role:superadministrator']);
    });
    Route::get('posts', 'PostController@index')->middleware(['role:superadministrator']);

});
