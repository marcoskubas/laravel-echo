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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'chat', 'as' => 'chat.', 'middleware' => 'auth'], function(){
    Route::get('rooms', 'RoomsController@index')->name('rooms.list');
    Route::get('rooms/{id}', 'RoomsController@show')->name('rooms.show');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
