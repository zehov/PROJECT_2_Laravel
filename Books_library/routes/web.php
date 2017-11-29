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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('book/{id}', 'BookController@show')->name('show');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('users/{id}', 'UserController@show_author')->name('show_author');

Route::group(['middleware' => 'auth'],function(){
		Route::group(['middleware' => 'admin'], function(){
			Route::resource("authors", 'AuthorController');
				/*Route::group(['middleware' => 'user'], function(){*/
						/*Route::get('/home', 'HomeController@index')->name('home');
						Route::get('/info', 'BookController@index')->name('info');
						Route::get('/users', 'UserController@index')->name('users');
						Route::get('users/{id}', 'UserController@show_author')->name('show_author');
			
						Route::resource("book", 'BookController');
						Route::resource("user", 'UserController');
						Route::resource("read", 'ReadController');
*/
				});

				Route::group(['middleware' => 'user'], function(){
						//Route::get('/home', 'HomeController@index')->name('home');
						Route::get('/info', 'BookController@index')->name('info');
						Route::get('/users', 'UserController@index')->name('users');
						
			
						Route::resource("book", 'BookController');
						Route::resource("user", 'UserController');
						Route::resource("read", 'ReadController');

				});
						//Route::get('/home', 'HomeController@index')->name('home');
						Route::get('/info', 'BookController@index')->name('info');
						Route::get('/users', 'UserController@index')->name('users');
						//Route::get('users/{id}', 'UserController@show_author')->name('show_author');
			
						Route::resource("book", 'BookController');
						Route::resource("user", 'UserController');
						Route::resource("read", 'ReadController');

			});
			

			
