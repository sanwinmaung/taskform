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
    return view('home');
});

Route::get('portfolio', 'HomeController@portfolio')->name('portfolio');
Route::get('download-cv', 'HomeController@getDownload')->name('download.cv');

Route::resource('task-forms', 'TaskFormController');
Route::resource('task-types', 'TaskTypeController');
Route::resource('priority', 'PriorityController');
Route::resource('contact', 'ContactController');
Route::resource('users', 'UserController');

/* Testing Route*/
Route::get('testing', 'TestingController@test');
