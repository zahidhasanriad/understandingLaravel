<?php
// application/tests/Controllers/users.test.php

class TestUsersController extends PHPUnit_Framework_TestCase {

	/*
	 Should run migrations before run tests
	*/
	public static function setUpBeforeClass()
	{
		Tests\Helper::migrate();
		Tests\Helper::use_sessions();
	}

	/*
	 Clean table between every test
	*/
	public function setUp()
	{
		DB::table('users')->delete();
	}

	/*
	 User shall signup
	*/
	public function testPostSignup()
	{
		$params = array(
			'username' => 'sample',
			'email' => 'sample@gmail.com',
			'password' => 'secret',
		);

		$user = new User($params);
		$user_json = Response::eloquent($user);

		// simulates a jason input
		Input::$json = $user->attributes; // <== Important! May change for non Json input.
		$result = Tests\Helper::http_request('POST','users/signup');

		// expects a 200 answer with the user details
		$this->assertEquals(200, $result->status());
		$this->assertEquals(json_encode($params),$result->content);
	}
}