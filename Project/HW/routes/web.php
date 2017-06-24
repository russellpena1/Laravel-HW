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

Route::resource('/meals', "MealsController");

Route::resource('/foods', "FoodsController");

Route:resource('/welcome', "WelcomeController");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
