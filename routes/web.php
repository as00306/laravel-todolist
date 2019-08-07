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

Route::get('/', 'TodoController@index');

Route::post('/add', 'TodoController@add')->name('add');
Route::post('/del', 'TodoController@del')->name('del');
Route::post('/upd', 'TodoController@upd')->name('upd');

