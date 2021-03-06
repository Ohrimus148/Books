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

Route::any('/home', 'HomeController@index')->name('home');
Route::any('/addbook', 'HomeController@addbook')->name('addbook');
Route::any('/deletebook/{id}','HomeController@deletebook')->where('id', '[0-9]+');
Route::any('/image/{id}','HomeController@showimage')->where('id', '[0-9]+');


