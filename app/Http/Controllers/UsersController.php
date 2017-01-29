<?php namespace Course\Http\Controllers;


use Course\User;

/**
* 
*/
class UsersController extends Controller
{
	
	public function getOrm() {

		$user = User::get();
		dd($user->toArray());
	}

 	public function getIndex() {

		$result = \DB::table('users')
		->select('first_name', 'last_name')
		->get();
		dd($result);

		return $result;

	}
}

?> 


