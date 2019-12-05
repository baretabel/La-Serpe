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

Route::get('/test', 'PageController@test');

Route::get('/test2', 'PageController@test2');

Route::get('/produits', 'ProductController@index');

Route::get('/form', 'ProductController@form');

Route::post('/insert', 'ProductController@create');

Route::post('/update', 'ProductController@update');

Route::get('/produit/{id}', 'ProductController@show');

Route::get('/produits/{id}', 'ProductController@destroy');

Route::get('/form/{id}', 'ProductController@modif');

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
