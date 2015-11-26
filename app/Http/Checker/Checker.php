<?php

namespace ACADA\Http\Checker;

use ACADA\User;

class Checker
{
	
	public static function checkByUserName ($username)
	{
		$checkByUserName  = User::where('username', '=', $username)->get(); 		
		return count($checkByUserName) ? "present" : "absent";
	}

	public static function checkByUserEmail ($email)
	{
		$checkByUserEmail  = User::where('email', '=', $email)->get(); 
		return count($checkByUserEmail) ? "present" : "absent";
	}

	public static function checkByOauth ($id)
	{
		$checkByOauth  = User::where('oauth', '=', $id)->get(); 		
		return count($checkByOauth) ? "present" : "absent";
	}

}