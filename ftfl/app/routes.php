<?php



Route::get('/', function()
{
	return View::make('hello');
});

Route::resource('welcome/sayhello','WelcomeController@testHello');

//Route::resource('welcome/sayhi', 'GreetingController@sayhi');




