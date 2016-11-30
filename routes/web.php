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

/* Tests routes */

/* Get all */
Route::get('tests', 'TestController@index')->name('tests.index');

/* Create new test */
/* Initialization with form */
Route::get('/tests/create', 'TestController@create')->name('tests.create');
/* Create processing */
Route::post('/tests', 'TestController@store')->name('tests.store');

/* Edit existing test */
/* Initialization with form */
Route::get('/tests/{id}/edit', 'TestController@edit')->name('tests.edit');
/* Edit processing */
Route::put('/tests/{id}', 'TestController@update')->name('tests.update');

/* Delete Test */
/* Intermediate form to confirm delete */
Route::get('/tests/{id}/delete', 'TestController@delete')->name('tests.destroy');
/* Delete processing */
Route::delete('/tests/{id}', 'TestController@destroy')->name('tests.destroy');

/* Users routes */

/* Get all */
Route::get('users', 'UserController@index')->name('users.index');

/* Create new user */
/* Initialization with form */
Route::get('/users/create', 'UserController@create')->name('users.create');
/* Create processing */
Route::post('/users', 'UserController@store')->name('users.store');

/* Edit existing user */
/* Initialization with form */
Route::get('/users/{id}/edit', 'UserController@edit')->name('users.edit');
/* Edit processing */
Route::put('/users/{id}', 'UserController@update')->name('users.update');

/* Delete User */
/* Intermediate form to confirm delete */
Route::get('/users/{id}/delete', 'UserController@delete')->name('users.destroy');
/* Delete processing */
Route::delete('/users/{id}', 'UserController@destroy')->name('users.destroy');
