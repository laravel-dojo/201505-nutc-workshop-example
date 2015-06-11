<?php

/*
|--------------------------------------------------------------------------
| Route Patterns
|--------------------------------------------------------------------------
| 
*/

Route::pattern('id', '[0-9]+');

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

Route::get('/', ['as' => 'home.index', 'uses' => 'HomeController@index']);

Route::get('about', ['as' => 'about.index', 'uses' => 'AboutController@index']);

Route::get('posts'              , ['as' => 'posts.index'  , 'uses' => 'PostsController@index']);
Route::get('random'             , ['as' => 'posts.random' , 'uses' => 'PostsController@random']);
Route::get('posts/{id}'         , ['as' => 'posts.show'   , 'uses' => 'PostsController@show']);
Route::get('posts/create'       , ['as' => 'posts.create' , 'uses' => 'PostsController@create']);
Route::post('posts'             , ['as' => 'posts.store'  , 'uses' => 'PostsController@store']);
Route::get('posts/{id}/edit'    , ['as' => 'posts.edit'   , 'uses' => 'PostsController@edit']);
Route::patch('posts/{id}'       , ['as' => 'posts.update' , 'uses' => 'PostsController@update']);
Route::delete('posts/{id}'      , ['as' => 'posts.destroy', 'uses' => 'PostsController@destroy']);
Route::post('posts/{id}/comment', ['as' => 'posts.comment', 'uses' => 'PostsController@comment']);

Route::get('contact' , ['as' => 'contacts.create', 'uses' => 'ContactsController@create']);
Route::post('contact', ['as' => 'contacts.store', 'uses' => 'ContactsController@store']);

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
	// 'auth' => 'Auth\AuthController',
	// 'password' => 'Auth\PasswordController',
// ]);
