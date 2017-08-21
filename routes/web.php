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
Route::get('/', 'HomeController@index')->name('home');


/*ROUTES FOR LOGIN, REGISTER, HOME AND LOGOUT*/
Route::get('/login', function(){
    return view('auth.login');
})->name('login');

Route::get('/register', function(){
    return view('auth.register');
})->name('register');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

/*ALL ROUTES RELATED TO NAVIGATING THE SYSTEM*/

Route::get('/dashboard', 'HomeController@viewDashboard')->name('view_dashboard');

Route::get('/profile', 'HomeController@viewProfile')->name('view_profile');

Route::get('/matches', 'HomeController@viewMatches')->name('viewMatches');


Route::post('/processLogin', 'Auth\LoginController@login')->name('process_login');

Route::get('/profile', 'UserController@viewProfile')->name('view_profile');


Route::get('/home', 'HomeController@index')->name('home');


