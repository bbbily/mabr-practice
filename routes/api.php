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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::get('refresh', 'Auth\LoginController@refresh');
    Route::get('user', 'Auth\LoginController@me');

});

Route::group([

    'middleware' => 'api',

], function ($router) {

    Route::resource('people', 'PersonController');
    Route::post('people/{person}/image', 'PersonController@updateImage');
    Route::resource('tasks', 'TaskController');
});
