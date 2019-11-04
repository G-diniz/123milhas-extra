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

Route::middleware('api')->group(function () {
    Route::post('/addPizza', 'PizzaController@add');
    Route::post('/editPizza', 'PizzaController@edit');
    Route::post('/removePizza', 'PizzaController@remove');

    Route::post('/createOrder', 'OrderController@newOrder');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
