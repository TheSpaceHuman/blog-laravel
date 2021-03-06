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

/*Route::group(['prefix'=>'admin', 'namespace'=>'Admin', 'middleware'=>['auth']], function (){
  Route::get('/', 'DashboardController@dashboard')->name('admin.index');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');*/

Route::get('/', function () {
  return view('welcome');
});
Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function (){
  Route::get('/', 'DashboardController@index')->name('admin');
  Route::resource('/category', 'CategoryController');
  Route::resource('/tags', 'TagsController');
  Route::resource('/users', 'UsersController');
  Route::resource('/posts', 'PostsController');
});
