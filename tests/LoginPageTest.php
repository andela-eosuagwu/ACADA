<?php

use App\User as User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginPageTest extends TestCase
{

    public function testExample()
    {
        $this->assertTrue(true);
    }



	/**
	 * Test if a user can log in to the system
	 *
	 * This test presumes that the user exists
	 */
	// public function testLoginFormWorksCorrectly()
	// {
	// 	//create a user
	// 	$this->createUser();

	// 	$this->visit('/login')
	// 		->type('john@doe.com','email')
	// 		->type('password', 'password')
	// 		->press('submit')
	// 		->seePageIs('/');
	// }


	// public function createUser()
	// {
	// 	User::create([
	// 	  'name' => 'johndoe',
	// 	  'email' => 'john@doe.com',
	// 	  'password'=> bcrypt('password')
	// 	]);
	// }
}
