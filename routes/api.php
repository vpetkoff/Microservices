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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Group routes for IP microservice
Route::prefix('ipms')->group(function () {
  // Group IP microservice's routes by version
  Route::prefix('v1')->group(function () {
    Route::get('/', 'IPController@show');
  });
});
