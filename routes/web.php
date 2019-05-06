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
    Route::get('contact', 'HomeController@contact');
    Route::get('single_post', 'HomeController@single_post');
    Route::group(['prefix' => 'admin/'], function () {
    Route::get('', 'AdminController@index');
    Route::get('index', 'AdminController@index');
    Route::get('{name}', 'AdminController@list');
    Route::group(['prefix' => '/{name}/'], function () {
    	Route::get('add', 'AdminController@add');
    	Route::get('edit/{id}', 'AdminController@edit');
    	Route::post('add', 'AdminController@add');
    	Route::post('edit/{id}', 'AdminController@edit');
    	Route::get('deactivated/{id}', 'AdminController@deactivated');
    	Route::get('activated/{id}', 'AdminController@activated');
    });
});
});
