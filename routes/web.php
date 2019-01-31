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



Route::get('/products','ProductController@index')->name('product');
Route::get('/products/insert','ProductController@index_insert')->name('index.insert');
Route::post('/products/insert','ProductController@store')->name('product.insert');
Route::get('/products/update/id/{id}','ProductController@index_update')->name('index.update');
Route::post('/products/update/{id}','ProductController@update')->name('product.update');
Route::get('/products/delete/id/{id}','ProductController@destroy')->name('product.destroy');