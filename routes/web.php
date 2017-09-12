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


//auth routes
Auth::routes();

// apartment resource routes
Route::resource('apartment', 'ApartmentController');

// basic_information resource routes
Route::get('basic_information/create/{apartment_id}', 'BasicInformationController@create')
    ->name('basic_information.create');
Route::post('basic_information/store', 'BasicInformationController@store')
    ->name('basic_information.store');
Route::get('basic_information/{id}/edit', 'BasicInformationController@edit')
    ->name('basic_information.edit');

// pages
Route::post('/theme', 'ThemeController@changeTheme')->name('user.theme');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'pageController@getHome');

