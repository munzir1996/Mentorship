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
//Main
Route::get('/', 'HomeController@homeIndex')->name('home');
Route::get('/more', 'HomeController@homeMore')->name('home.more');
//About us
Route::get('/aboutus', 'HomeController@aboutusIndex')->name('aboutus');
//Team
Route::get('/team/center', 'TeamController@indexCenter')->name('team.center');
Route::get('/team/program', 'TeamController@indexProgram')->name('team.program');
//Programs
Route::resource('/program/university', 'UniversityController');
