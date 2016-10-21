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
Route::post('/lorem', 'LoremController@show')->name('lorem.show');

# Index for Lorem Ipsum generator
Route::get('/user', 'UserController@index')->name('user.index');

# Process Lorem Ipsum generator form
Route::post('/user', 'UserController@show')->name('user.show');

# Index for Lorem Ipsum generator
Route::get('/color', 'ColorController@index')->name('color.index');

# Process Lorem Ipsum generator form
Route::post('/color', 'ColorController@show')->name('color.show');

# Index for Lorem Ipsum generator
Route::get('/xkcd', 'XkcdController@index')->name('xkcd.index');

# Process Lorem Ipsum generator form
Route::post('/xkcd', 'XkcdController@show')->name('xkcd.show');
