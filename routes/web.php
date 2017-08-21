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



########LOGIN AND REGISTER ROUTES #######
Route::get('user/login/', 'Auth\LoginController@login');

Route::get('/', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@viewProfile')->name('view_profile');