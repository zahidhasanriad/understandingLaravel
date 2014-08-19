<?php
// application/controllers/users.php

class Users_Controller extends Base_Controller
{
	public $restful = true;

	public function __construct()
	{
		$this->filter('before', 'auth')->except(array('signup', 'login', 'lost_password'));
	}

	public function post_signup()
	{
		$input = (array) Input::json();

		if(User::signup($input)){
			return Response::json($input);
		}else{
			return Response::json('',404);
		}
	}

	// [...] other fancy stuff
}