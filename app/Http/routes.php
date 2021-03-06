<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('pages' , 'PageController@show');

Route::get('pages/{page}' , 'PageController@onepage');

Route::post('pagesstore' , 'PageController@store');

Route::get('pages/{page}/delete' , 'PageController@delete');




Route::post('pages/{page}/notesstore' , 'NoteController@store');








