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

Route::group(['prefix' => '/'], function () {
    Route::get('', 'HomeController@index');
    Route::get('index', 'HomeController@index');
    Route::get('login', 'HomeController@login');
    Route::get('archive_grid', 'HomeController@archive_grid');
    Route::get('archive_list', 'HomeController@archive_list');
    Route::get('contact', 'HomeController@contact');
    Route::get('single_post', 'HomeController@single_post');
    Route::get('video_post', 'HomeController@video_post');
    Route::get('typography', 'HomeController@typography');
});
Route::group(['prefix' => '/admin'], function () {
    Route::get('/', 'AdminController@index');
    Route::get('/index', 'AdminController@index');
    Route::group(['prefix' => '/post'], function () {
    	Route::get('/', 'PostController@index');
    	Route::get('/add', 'PostController@index');
    	Route::get('/edit', 'PostController@index');
    });
    Route::group(['prefix' => '/posttype'], function () {
    	Route::get('/', 'PosttypeController@index');
    	Route::get('/add', 'PosttypeController@index');
    	Route::get('/edit', 'PosttypeController@index');
    });
    Route::group(['prefix' => '/comment'], function () {
    	Route::get('/', 'CommentController@index');
    	Route::get('/add', 'CommentController@index');
    	Route::get('/edit', 'CommentController@index');
    });
    Route::group(['prefix' => '/contact'], function () {
    	Route::get('/', 'ContactController@index');
    	Route::get('/add', 'ContactController@index');
    	Route::get('/edit', 'ContactController@index');
    });
    Route::group(['prefix' => '/message'], function () {
    	Route::get('/', 'MessageController@index');
    	Route::get('/add', 'MessageController@index');
    	Route::get('/edit', 'MessageController@index');
    });
    Route::group(['prefix' => '/user'], function () {
    	Route::get('/', 'UserController@index');
    	Route::get('/add', 'UserController@index');
    	Route::get('/edit', 'UserController@index');
    });
    Route::group(['prefix' => '/usertype'], function () {
    	Route::get('/', 'UsertypeController@index');
    	Route::get('/add', 'UsertypeController@index');
    	Route::get('/edit', 'UsertypeController@index');
    });
    Route::group(['prefix' => '/menu'], function () {
    	Route::get('/', 'MenuController@index');
    	Route::get('/add', 'MenuController@index');
    	Route::get('/edit', 'MenuController@index');
    });
    Route::group(['prefix' => '/submenu'], function () {
    	Route::get('/', 'SubmenuController@index');
    	Route::get('/add', 'SubmenuController@index');
    	Route::get('/edit', 'SubmenuController@index');
    });
});