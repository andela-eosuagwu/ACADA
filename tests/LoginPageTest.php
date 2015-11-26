<?php

use App\User as User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LoginPageTest extends TestCase
{
	public function testLoginFormWorksCorrectly()
	{
        $user = Auth::attempt(['username' => 'test', 'password' => 'test']);
        $this->assertEquals(1, sizeof($user));
	}

}
