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

Route::get('/', 'UserController@index');
Route::get('{id}', 'UserController@show');
Route::get('create-user', 'UserController@create');

// Route::get('create-user', 'UserController@create');
// Route::post('create-user', 'Controller@createUserButton');




