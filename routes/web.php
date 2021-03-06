<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'uses' => 'ArticlesController@getIndex',
    'as' => 'top',
]);

Route::get('/articles/new', [
    'uses' => 'ArticlesController@getCreate',
    'as' => 'create',
]);

Route::post('/articles/new', [
    'uses' => 'ArticlesController@postCreate',
    'as' => 'post_create',
]);

Route::get('/articles/edit/{id}', [
    'uses' => 'ArticlesController@getEdit',
    'as' => 'edit',
]);

Route::post('/articles/edit/{id}', [
    'uses' => 'ArticlesController@postEdit',
    'as' => 'post_edit',
]);

Route::get('/articles/delete/{id}', [
    'uses' => 'ArticlesController@getDestroy',
]);

Route::post('/articles/delete/{id}', [
    'uses' => 'ArticlesController@postDestroy',
    'as' => 'post_destroy',
]);
