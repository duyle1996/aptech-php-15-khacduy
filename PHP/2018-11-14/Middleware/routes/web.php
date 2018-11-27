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


route::get('/role',[
    'middleware' => 'role:superadmin',
    'uses' => 'MainController@checkRole',
]
);
route::get('/controller-middleware',[
    'middleware' => 'First',
    'uses' => 'TestController@_construct',
    'uses'       =>'TestController@testControllerMiddleware',
]);
Route::get('contact', 'ContactController@showContactForm');
Route::post('contact', 'ContactController@insertMessage');
