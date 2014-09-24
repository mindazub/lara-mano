<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', array(
	'as'=>'home',
	'uses'=>'HomeController@showWelcome'
	));

Route::get('/about', array(
	'as'=>'about-me',
	'uses'=>'HomeController@about'
	));

Route::get('/contact', array(
	'as'=>'contact-me',
	'uses'=>'HomeController@contact'
	));
Route::get('/register', array(
	'as'=>'register-me',
	'uses'=>'HomeController@register'
	));
Route::get('/login', array(
	'as'=>'login-me',
	'uses'=>'HomeController@login'
	));

Route::post('/register', array(
	'as'=>'register-me',
	'uses'=>'HomeController@register'
	));