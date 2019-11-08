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


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('admin');
Route::get('/create/contact', 'AdminController@create')->name('create');
Route::post('/create/contact', 'AdminController@store')->name('store');

Route::get('/all/contact', 'AdminController@all')->name('all');

Route::get('/show/contact/', 'AdminController@show')->name('show');
Route::get('/show/contact/{id}', 'AdminController@getContact')->name('get');

