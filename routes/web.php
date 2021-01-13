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
Auth::routes([
  'register' => false, 
  'reset' => false, 
  'verify' => false, 
]);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('web.homepage');

Route::prefix('manage')->middleware('auth')->group(function() {

	Route::get('/users', 'UserController@index')->name('manage.users.index');
	Route::get('/users/create', 'UserController@create')->name('manage.users.create');
	Route::post('/users', 'UserController@store')->name('manage.users.store');
	Route::get('/users/{id}', 'UserController@show')->name('manage.users.show');
	Route::get('/users/{id}/edit', 'UserController@edit')->name('manage.users.edit');
	Route::put('/users/{id}', 'UserController@update')->name('manage.users.update');

	Route::get('/products', 'ProductController@index')->name('manage.products.index');
	Route::get('/products/create', 'ProductController@create')->name('manage.products.create');
	Route::post('/products', 'ProductController@store')->name('manage.products.store');
	Route::get('/products/{id}', 'ProductController@show')->name('manage.products.show');
	Route::get('/products/{id}/edit', 'ProductController@edit')->name('manage.products.edit');
	Route::put('/products/{id}', 'ProductController@update')->name('manage.products.update');
	Route::delete('/products/{id}', 'ProductController@destroy')->name('manage.products.delete');
});
