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

Route::get('/', ['as' => 'home.index', function()
{
    $data = ['post_type' => '熱門文章'];

    return view('posts.index', $data);
}]);

Route::get('about', ['as' => 'about.index', function()
{
    return view('about.index');
}]);

Route::get('posts', ['as' => 'posts.index', function()
{
    $data = ['post_type' => '文章總覽'];

    return view('posts.index', $data);
}]);

Route::get('random', ['as' => 'posts.random', function()
{
    $titles = [
        '感謝上師，讚嘆師父！',
        '每個人都能出來！',
        '會走到什麼地方？'
    ];

    $sub_titles = [
        '一雙眼和一雙眼短暫的交會擦身而過',
        '人們也就三三五五的散去',
        '樹要樹皮人要麵皮'
    ];

    $post = [
        'title' => $titles[rand(0, 2)],
        'sub_title' => $sub_titles[rand(0, 2)],
    ];

    $data = compact('post');

    return view('posts.show', $data);
}]);

Route::get('posts/{id}', ['as' => 'posts.show', function($id)
{

    $data = [
        'post' => [
            'title' => '文章內容 '.$id,
            'sub_title' => '文章副標題'
        ]
    ];

    return view('posts.show', $data);
}]);

Route::get('posts/create', ['as' => 'posts.create', function()
{
    return view('posts.create');
}]);

Route::post('posts', ['as' => 'posts.store', function()
{
    return 'posts.store';
}]);

Route::get('posts/{id}/edit', ['as' => 'posts.edit', function($id)
{
    $data = compact('id');
    return view('posts.edit', $data);
}]);

Route::patch('posts/{id}', ['as' => 'posts.update', function($id)
{
    return 'posts.update: '.$id;
}]);

Route::delete('posts/{id}', ['as' => 'posts.destroy', function($id)
{
    return 'posts.destroy: '.$id;
}]);

Route::post('posts/{id}/comment', ['as' => 'posts.comment', function($id)
{
    return 'posts.comment: '.$id;
}]);

Route::get('contact', ['as' => 'contacts.create', function()
{
	return view('contacts.create');
}]);

Route::post('contact', ['as' => 'contacts.store', function()
{
	return 'contact.store';
}]);

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

// Route::controllers([
	// 'auth' => 'Auth\AuthController',
	// 'password' => 'Auth\PasswordController',
// ]);
