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
    $posts = Post::all();

	return View::make('home')->with('posts', $posts);
});

Route::get('post/{id}', function($id)
{
    $post = Post::find($id);

    return View::make('show')->with('post', $post);
});
