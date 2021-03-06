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

Route::get('/', 'MainController@index');

Route::match(array('GET','POST'),'/project/{id}'         ,  'MainController@projectList');
Route::match(array('GET','POST'),'/portfolio'            ,  'MainController@redirectToExp');

Route::match(array('GET','POST'),'/email'                ,  'MainController@myTestMail');
Route::get('/download'                                   ,  'MainController@getDownload');