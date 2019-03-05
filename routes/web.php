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
    return view('backend.products');
})->middleware('auth');

Auth::routes();

//Route::get('/', 'ProductController@index')->name('home')->middleware('auth');


Route::group(['prefix' => '/admin/products'],function(){
    Route::get('/','backend\ProductController@index')->name('product')->middleware('auth');
    Route::get('/insert','backend\ProductController@index_insert')->name('index.insert');
    Route::post('/insert','backend\ProductController@store')->name('product.insert');
    Route::get('/update/id/{id}','backend\ProductController@index_update')->name('index.update');
    Route::post('/update/{id}','backend\ProductController@update')->name('product.update');
    Route::get('/delete/id/{id}','backend\ProductController@destroy')->name('product.destroy');
});

Route::group(['prefix' => '/productsList'],function(){
   Route::get('/','frontend\ProductListController@index');
});
