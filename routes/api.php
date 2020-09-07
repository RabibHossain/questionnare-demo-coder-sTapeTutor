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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/hello', function () {
    return "lol";
});

$router->group(['prefix' => 'api'], function () use ($router) {

    $router->post('register', 'Api\Auth\AuthController@register');
    $router->post('login', 'Api\Auth\AuthController@login');

    $router->group(['middleware' => 'auth.jwt'], function() use ($router) {

        Route::post('refresh', 'Api\Auth\AuthController@refresh');
        Route::post('user', 'Api\Auth\AuthController@getAuthUser');
        Route::get('tasks', 'TaskController@index');

    });

});