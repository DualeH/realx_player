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

Route::get('/', 'HomeController@index')->name('index');

// 登录
Route::get('/login', 'LoginController@index')->name('index'); // page
Route::post('login', 'SessionsController@store')->name('login'); // form
Route::delete('logout', 'SessionsController@destroy')->name('logout'); // 登出

// 课程
Route::get('/courses', 'CoursesController@index')->name('index');

// User
Route::resource('users', 'UsersController');