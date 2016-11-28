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


/* Delete Test */
/* Intermediate form to confirm delete */
Route::get('/tests/{id}/delete', 'TestController@delete')->name('tests.destroy');
/* Delete processing */
Route::delete('/tests/{id}', 'TestController@destroy')->name('tests.destroy');


Route::get('users', 'UserController@index')->name('users.index');
