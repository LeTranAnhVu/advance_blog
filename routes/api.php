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
//v1
Route::prefix('v1')->namespace('Api\v1')->name('api.v1.')->middleware([])->group(function () {
    //    auth
    Route::prefix('auth')->namespace('Auth')->name('auth.')->group(function () {
        Route::post('login', 'ApiAuthController@login');
        Route::post('logout', 'ApiAuthController@logout');
    });
//    admin
    Route::prefix('admin')->namespace('Admin')->name('admin.')->middleware(['auth:api','role:superadministrator|administrator|author|editor'])->group(function () {
        Route::post('/authenticated', 'AdminController@index');
        Route::get('posts', 'PostController@index');
    });


});
