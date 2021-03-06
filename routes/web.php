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
Route::get('/', 'PagesController@home')->name('home');
Route::get('posts/create', 'PostsController@create');
Route::post('posts', 'PostsController@store');
Route::get('posts/{post}', 'PostsController@show');
Route::post('posts/{post}/comments', 'CommentsController@store');

Route::get('/popular', 'PostsController@popular');
Route::get('/browse', 'PostsController@index');

Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::get('/users/{user}', 'UsersController@show');

Route::get('tasks', 'TasksController@index');
Route::get('tasks/{task}', 'TasksController@show');

Route::get('register', 'RegistrationController@create');
Route::post('register', 'RegistrationController@store');

Route::get('login', 'Sessionscontroller@create')->name('login');
Route::post('login', 'SessionsController@store');
Route::get('logout', 'Sessionscontroller@destroy');