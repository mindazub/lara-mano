<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function about(){
		return View::make('layout/about');
	}

	public function contact(){
		return View::make('layout/contact');
	}

	public function register(){
		return View::make('layout/register');
	}
	public function login(){
		return View::make('layout/login');
	}
}
