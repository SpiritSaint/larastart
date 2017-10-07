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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/admin/users', 'Admin\UsersController@index')->name('admin.users');

Route::get('/admin/users/{user}', 'Admin\UsersController@show')->name('admin.users.show');

Route::get('/admin/users/{user}/edit', 'Admin\UsersController@edit')->name('admin.users.edit');