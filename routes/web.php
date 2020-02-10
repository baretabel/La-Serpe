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


Route::get('/admin', 'AdminController@admin');

Route::get('/especes', 'AdminController@especes');

Route::get('/articles', 'AdminController@articles');

Route::get('/form', 'SerpeControleur@form');

Route::get('/aff', 'SerpeControleur@aff');

Route::get('/new/{id}', 'SerpeControleur@nouv');

Route::get('/espece/{id}', 'SerpeControleur@show');

Route::get('/article/{id}', 'SerpeControleur@article');

Route::post('/insert', 'SerpeControleur@create');

Route::post('/com', 'SerpeControleur@com');

Route::post('/art', 'SerpeControleur@art');

Route::post('/modif', 'AdminController@modif');
Route::post('/modiff', 'AdminController@modiff');
Route::post('/up', 'AdminController@up');

Route::get('/commentaire', 'AdminController@com');

Route::get('/user', 'AdminController@user');

Route::get('/destroy/{id}', 'AdminController@destroy');

Route::get('/sup/{id}', 'AdminController@sup');

Route::get('/val/{id}', 'AdminController@val');

Route::get('/supp/{id}', 'AdminController@supp');

Route::get('/valid/{id}', 'AdminController@valid');

Route::get('/util/{id}', 'AdminController@util');

Route::get('/mod/{id}', 'AdminController@mod');

Route::get('/admin/{id}', 'AdminController@admins');

Route::get('/', function () {
    return view('welcome');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
