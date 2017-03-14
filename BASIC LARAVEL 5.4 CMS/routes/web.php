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
/*
Route::get('/', function () {
    return view('home');
});
*/

Auth::routes();

Route::get('/', 'HomeController@index');


/**
 * The Post Routes
 */

Route::get('/posts/create', 'PostController@create');

Route::get('/posts', 'PostController@index');

Route::get('/posts/{post}', 'PostController@show');


Route::post('/posts', 'PostController@store');

Route::get('/posts/edit/{post}', 'PostController@edit');

Route::post('/posts/{post}', 'PostController@update');

Route::get('/posts/delete/{post}', 'PostController@destroy');

/**
 * The Category Routes
 */

Route::get('/categories/create', 'CategoryController@create');

Route::get('/categories', 'CategoryController@index');

Route::get('/categories/{category}', 'CategoryController@show');


Route::post('/categories', 'CategoryController@store');

Route::get('/categories/edit/{category}', 'CategoryController@edit');

Route::post('/categories/{category}', 'CategoryController@update');

Route::get('/categories/delete/{category}', 'CategoryController@destroy');

/**
 * The Tag Routes
 */

Route::get('/tags/create', 'TagController@create');

Route::get('/tags', 'TagController@index');



Route::post('/tags', 'TagController@store');

Route::get('/tags/edit/{tag}', 'TagController@edit');

Route::post('/tags/{tag}', 'TagController@update');

Route::get('/tags/delete/{tag}', 'TagController@destroy');

Route::get('/tags/{tag}', 'TagController@showtagposts');



/**
 * Comment routes
 */

Route::post('/comments', 'CommentController@store');

Route::get('/comments/edit/{comment}', 'CommentController@edit');

Route::post('/comments/{comment}', 'CommentController@update');

Route::get('/comments/delete/{comment}', 'CommentController@destroy');







