<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

# Index for website homepage
Route::get('/', 'HomeController@index')->name('home.index');

# Index for Lorem Ipsum generator
Route::get('/lorem', 'LoremController@index')->name('lorem.index');

# Process Lorem Ipsum generator form
Route::post('/lorem', 'LoremController@store')->name('lorem.store');

# Index for Lorem Ipsum generator
Route::get('/user', 'UserController@index')->name('user.index');

# Process Lorem Ipsum generator form
Route::post('/user', 'UserController@store')->name('user.store');

# Index for Lorem Ipsum generator
Route::get('/color', 'ColorController@index')->name('color.index');

# Process Lorem Ipsum generator form
Route::post('/color', 'ColorController@store')->name('color.store');

# Index for Lorem Ipsum generator
Route::get('/xkcd', 'XkcdController@index')->name('xkcd.index');

# Process Lorem Ipsum generator form
Route::post('/xkcd', 'XkcdController@store')->name('xkcd.store');
