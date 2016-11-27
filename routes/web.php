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
Route::get('/', 'MainController@index')->name('main.index');

# Tests routes
Route::get('tests', 'TestController@index')->name('tests.index');

Route::get('/tests/{id}/delete', 'TestController@delete')->name('tests.destroy');
Route::delete('/tests/{id}', 'TestController@destroy')->name('tests.destroy');

Route::get('users', 'UserController@index')->name('users.index');
