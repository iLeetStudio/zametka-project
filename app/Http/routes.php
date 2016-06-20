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
Route::group(['middleware' => 'web'], function() {

	/* Роутинг на главную сайта */

	Route::get('/', [
		'as' => 'index',
		'uses' => 'HomeController@index'
	]);

	/* NoteController - Роутинг контроллера заметок */

	Route::get('/{url}', [
		'as' => 'index',
		'uses' => 'NoteController@getNote'
	]);
	Route::get('/add', [
		'as' => 'index',
		'uses' => 'NoteController@addNote'
	]);
	Route::get('/{url}/delete', [
		'as' => 'index',
		'uses' => 'NoteController@deleteNote'
	]);
	Route::get('/{url}/edit', [
		'as' => 'index',
		'uses' => 'NoteController@editNote'
	]);
	Route::post('/{url}/save', [
		'as' => 'index',
		'uses' => 'NoteController@saveNote'
	]);
	Route::get('/finish', [
		'as' => 'index',
		'uses' => 'NoteController@finish'
	]);
	
});