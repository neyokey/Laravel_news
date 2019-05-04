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