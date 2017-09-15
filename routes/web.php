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

// TechnicalInformation resource routes

Route::resource('elevator_checklist', 'ElevatorCheckListController',
    ["except" => ["create"]]);
Route::get('elevator_checklist/create/{apartment_id}', 'ElevatorCheckListController@create')
    ->name('elevator_checklist.create');
// TechnicalInformation resource routes

Route::resource('technical_information', 'TechnicalInformationController',
    ["except" => ["create"]]);
Route::get('technical_information/create/{apartment_id}', 'TechnicalInformationController@create')
    ->name('technical_information.create');

// basic_information resource routes
Route::resource('basic_information', 'BasicInformationController', ['except' => ['create']]);
Route::get('basic_information/create/{apartment_id}', 'BasicInformationController@create')
    ->name('basic_information.create');

// apartment resource routes
Route::resource('apartment', 'ApartmentController');

// pages
Route::post('/theme', 'ThemeController@changeTheme')->name('user.theme');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'pageController@getHome');

