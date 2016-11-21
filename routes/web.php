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

Route::get('/', 'ContactsController@index');
Route::get('contacts', 'ContactsController@index');
Route::get('contacts/{contact}', 'ContactsController@show');

Route::get('edit/{contact}', 'ContactsController@edit');
Route::post('alter/{contact}', 'ContactsController@alter');

Route::get('create', 'ContactsController@create');
Route::post('store', 'ContactsController@store');

Route::post('delete/{contact}', 'ContactsController@delete');