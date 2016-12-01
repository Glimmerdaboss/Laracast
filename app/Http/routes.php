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

//Route::get('about', function() {
 //   return view ('pages.about');
//});

Route::get('/letters','PagesController@letter');

Route::get('/about', 'PagesController@about');

Route::get('pages/cards', 'CardsController@cards');

Route::get('pages/cards/{card}', 'CardsController@show');

Route::post('pages/cards/{card}/notes','NotesController@store');

Route::get('notes/{note}/edit','Notescontroller@edit');

Route::patch('notes/{note}','NotesController@update');