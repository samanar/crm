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
Auth::routes();
Route::resource('apartment', 'ApartmentController');
Route::post('/theme', 'ThemeController@changeTheme')->name('user.theme');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'pageController@getHome');

