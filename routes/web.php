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

Route::get('/', 'BloggerController@showForm');
Route::post('/process', 'BloggerController@register');
Route::post('/profile', 'BloggerController@logIn');

Route::get('/blogs', 'BloggerController@showBlogs');

Route::post('/post/{id}', 'BloggerController@post');

Route::get('/blog/{id}', 'BloggerController@viewBlog');
