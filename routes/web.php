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
use Illuminate\Support\Facades\Route;

Route::get('/', 'Controller@index')->name('index_page');

//login route to view login page
Route::get('/login', 'Auth\LoginController@index')->name('login');

//process login request
Route::post('/login', 'Auth\LoginController@login')->name('process_login');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

//route to view registration page
Route::get('/register', 'Auth\RegisterController@index')->name('register');

//process register request;
Route::post('/register', 'Auth\RegisterController@register')->name('process_registration');


Route::middleware([ 'auth', 'reg.complete' ])->group(function () {

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('/dashboard', 'HomeController@viewDashboard')->name('view_dashboard');

    Route::get('/profile', 'HomeController@viewProfile')->name('view_profile');

//TODO::resolve the conflicts between these two routes {{--}}
//Route::get('/profile/edit', '');
//Route::resource('photos', 'PhotosController');

    Route::get('/matches', 'MatchesController@index')->name('viewMatches');

//search routes
    Route::get('/search', 'SearchController@index');

    Route::get('search/advance', 'SearchController@advanceIndex');

    Route::post('/search', 'SearchController@processSearch');

    Route::post('/search/advance', 'SearchController@processAdvanceSearch');


//interests routes

    Route::get('/interests', 'InterestsController@index');

    Route::get('/interests/{interest}', 'InterestsController@view');

//
//Route::delete('/interests/{interest}', 'InterestsController@delete');

});




