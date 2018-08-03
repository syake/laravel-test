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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', 'PagesController@show');

// CRUD
Route::group(['prefix' => 'posts'], function(){
  Route::any('/', 'ArticleController@index')->name('index');
  Route::get('/add', 'ArticleController@add');
  Route::post('/add', 'ArticleController@store');
  Route::get('/edit/{id}',     'ArticleController@edit');
  Route::post('/edit',     'ArticleController@update');
});
