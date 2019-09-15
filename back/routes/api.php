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
Route::prefix('users')->group(function() {
    Route::post('', 'UserController@store');
    Route::get('/{user}', 'UserController@show');
    Route::delete('/{user}', 'UserController@delete');
});


Route::prefix('teams')->group(function() {
    Route::post('', 'TeamController@store');
    Route::get('{team}', 'TeamController@show');
    Route::delete('{team}', 'TeamController@delete');
    Route::put('{team}', 'TeamController@update');
});

Route::get('participants', 'ParticipantController@index');
