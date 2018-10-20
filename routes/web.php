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

Route::get('/', 'HomeController@homeIndex')->name('home');
Route::get('/aboutus', 'HomeController@aboutusIndex')->name('aboutus');

Route::resource('/team', 'TeamController');
Route::resource('/program/university', 'UniversityController');
