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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');
//Route::get('venue/{name?}', 'VenueController@index');
Route::resource('venues', 'VenueController', ['except' => ['create', 'edit']]);
Route::resource('fields', 'FieldController', ['only' => ['index']]);
Route::resource('venues.fields', 'VenueFieldsController', ['except' => ['create', 'edit']]);

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController'
]);
