<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
		'as' => 'home',
		'uses' => 'WelcomeController@index'
		]);

Route::get('/about', [
		'as' => 'about',
		'uses' => 'WelcomeController@about'
		]);
Route::get('/menus', [
		'as' => 'menus',
		'uses' => 'WelcomeController@menus'
		]);



Route::get('contact', [
		'as' => 'contact',
		'uses' => 'WelcomeController@create'
		]);

Route::post('contact', [
		'as' => 'contact_store',
		'uses' => 'WelcomeController@store'
		]);



Route::get('/blog', [
		'as' => 'blog_alias',
		'uses' => 'WelcomeController@blog'
		]);

Route::get('articles/{slug}',[
		'as' => 'article',
		'uses' => 'WelcomeController@article',
	]);

Route::get('tag/{tag}',[
		'as' => 'tagged',
		'uses' => 'WelcomeController@tags',
	]);




Route::get('admin',[
		'as' => 'adminsite',
		'uses' => 'AdminController@desktop',
	]);

Route::get('/desktop','AdminController@desktop');

Route::get('admin/posts/{id}/edit', 'AdminController@edit');

Route::post('admin/posts/{id}/refresh', 'AdminController@refresh');

Route::get('/admin/posts/new',[
		'as' => 'new',
		'uses' => 'AdminController@novo',
	]);

Route::get('/admin/posts/{id}/delete','AdminController@delete');

Route::post('/admin/posts/new','AdminController@create');

Route::get('/logout',[
		'as' => 'logout',
		'uses' => 'AdminController@logout',
	]);


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
