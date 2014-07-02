<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('debug', function()
{
    return 'debug';
});

Route::get('posts', function()
{
    $posts = Post::all();

    $result = '';

    foreach($posts as $post)
    {
        $result .= $post->id.': '.$post->title.'<br>';
    }

    return $result;
});

Route::get('post/{id}', function($id)
{
    $post = Post::find($id);

    return $post->title;
});
