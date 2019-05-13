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
    Route::match(['get', 'post'],'login', 'HomeController@login');
    Route::match(['get', 'post'],'contact', 'HomeController@contact');
    Route::get('logout', 'HomeController@logout');
    Route::get('post/{id}', 'HomeController@post');
    Route::group(['prefix' => 'admin/'], function () {
        
    Route::get('', 'AdminController@index');
    Route::get('index', 'AdminController@index');
    Route::group(['prefix' => '/user/'], function () {
        Route::get('', 'UserController@index');
        Route::get('deactivated/{id}', 'UserController@deactivated');
        Route::get('activated/{id}', 'UserController@activated');
    	Route::match(['get', 'post'],'add', 'UserController@add');
    	Route::match(['get', 'post'],'edit/{id}', 'UserController@edit');
        });
    Route::group(['prefix' => '/usertype/'], function () {
        Route::get('', 'UsertypeController@index');
        Route::get('deactivated/{id}', 'UsertypeController@deactivated');
        Route::get('activated/{id}', 'UsertypeController@activated');
        Route::match(['get', 'post'],'add', 'UsertypeController@add');
        Route::match(['get', 'post'],'edit/{id}', 'UsertypeController@edit');
        });
    Route::group(['prefix' => '/post/'], function () {
        Route::get('', 'PostController@index');
        Route::get('deactivated/{id}', 'PostController@deactivated');
        Route::get('activated/{id}', 'PostController@activated');
        Route::get('denied/{id}', 'PostController@denied');
        Route::match(['get', 'post'],'add', 'PostController@add');
        Route::match(['get', 'post'],'edit/{id}', 'PostController@edit');
        Route::match(['get', 'post'],'view/{id}', 'PostController@view');
        });
    Route::group(['prefix' => '/posttype/'], function () {
        Route::get('', 'PosttypeController@index');
        Route::get('deactivated/{id}', 'PosttypeController@deactivated');
        Route::get('activated/{id}', 'PosttypeController@activated');
        Route::match(['get', 'post'],'add', 'PosttypeController@add');
        Route::match(['get', 'post'],'edit/{id}', 'PosttypeController@edit');
        });
    Route::group(['prefix' => '/comment/'], function () {
        Route::get('', 'CommentController@index');
        Route::get('deactivated/{id}', 'CommentController@deactivated');
        Route::get('activated/{id}', 'CommentController@activated');
        Route::get('denied/{id}', 'CommentController@denied');
        Route::match(['get', 'post'],'add', 'CommentController@add');
        Route::match(['get', 'post'],'view/{id}', 'CommentController@view');
        });
    Route::group(['prefix' => '/contact/'], function () {
        Route::get('', 'ContactController@index');
        Route::match(['get', 'post'],'edit/{id}', 'ContactController@edit');
        });
    Route::group(['prefix' => '/message/'], function () {
        Route::get('', 'MessageController@index');
        Route::get('deactivated/{id}', 'MessageController@deactivated');
        Route::get('activated/{id}', 'MessageController@activated');
        Route::get('denied/{id}', 'MessageController@denied');
        Route::match(['get', 'post'],'add', 'MessageController@add');
        Route::match(['get', 'post'],'view/{id}', 'MessageController@view');
        });
    Route::group(['prefix' => '/menu/'], function () {
        Route::get('', 'MenuController@index');
        Route::get('deactivated/{id}', 'MenuController@deactivated');
        Route::get('activated/{id}', 'MenuController@activated');
        Route::match(['get', 'post'],'add', 'MenuController@add');
        Route::match(['get', 'post'],'edit/{id}', 'MenuController@edit');
        Route::match(['get', 'post'],'delete/{id}', 'MenuController@delete');
        Route::group(['prefix' => '{id}/submenu/'], function () {
        Route::get('', 'SubmenuController@index');
        Route::get('deactivated/{subid}', 'SubmenuController@deactivated');
        Route::get('activated/{subid}', 'SubmenuController@activated');
        Route::match(['get', 'post'],'add', 'SubmenuController@add');
        Route::match(['get', 'post'],'edit/{subid}', 'SubmenuController@edit');
        Route::match(['get', 'post'],'delete/{subid}', 'SubmenuController@delete');
        });
        });
    });
});
