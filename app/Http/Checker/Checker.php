<?php

namespace App\Http\Checker;

use App\User;

/**
* 
*/
class Checker
{
	
	public static function checkByUserName ($username)
	{
		$checkByUserName  = User::where('username', '=', $username)->get(); 
		
		return count($checkByUserName) ? "present" : "absent";
	}

	public static function checkByOauth ($id)
	{
		$checkByOauth  = User::where('oauth', '=', $id)->get(); 
		
		return count($checkByOauth) ? "present" : "absent";
	}

}