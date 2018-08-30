<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('tags', 'TagsController@getTags');
Route::get('cmodules', 'PagesController@getCmodules');
Route::get('/', 'PagesController@getIndex');
Route::resource('cmodules', 'CmodulesController');

//Route::get('/', 'TagController@getIndex');
Route::get('tag', 'TagController@getTag');
