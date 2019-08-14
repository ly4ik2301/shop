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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('catalog/{id}','CatalogController@getIndex');
Route::get('/basket','BasketController@getIndex');
Route::get('basket/delete/{id}','BasketController@getDelete');
Route::post('/order','OrderController@postIndex');