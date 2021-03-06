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

Route::get('/admin/index', 'AdminController@index')->middleware('adminMiddleware')->name('admin.home');

Route::get('/admin/users', 'AdminController@users')->middleware('adminMiddleware')->name('admin.users');

Route::post('/admin/users/change/{userId}', 'AdminController@changeRole')->middleware('adminMiddleware')->name('admin.change-role');
