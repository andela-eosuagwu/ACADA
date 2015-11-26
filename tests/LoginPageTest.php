<?php

use App\User as User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginPageTest extends TestCase
{

    protected function createUser ()
    {
        $user = App\User::create([
            'username'  => 'test',
            'password'  => 'test',
            'email'     => 'test@test.com'
        ]);
        return $user;
    }

	public function testLoginFormWorksCorrectly()
	{
		$this->createUser();
        $user = Auth::attempt(['username' => 'test', 'password' => 'test']);
        $this->assertEquals(1, sizeof($user));
	}

    public function testForCreatingOneUser()
    {
        $this->createUser();
        $user = App\User::all();
        $this->assertEquals(1, sizeof($user));
    }

}
