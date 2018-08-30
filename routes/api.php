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


//List tags
Route::get('tags', 'TagController@index');

//list single tags
Route::get('tag/{id}', 'TagController@show');

//create new tags
Route::post('tag', 'TagController@store');

//update tag
Route::put('tag', 'TagController@store');

//Delete tags
Route::delete('tag/{id}', 'TagController@destroy');

