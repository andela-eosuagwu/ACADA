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

}