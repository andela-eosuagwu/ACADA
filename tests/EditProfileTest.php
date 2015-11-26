<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileTest extends TestCase
{


	public function testEditProfilePageLoadsCorrectly()
	{
        $update = User::where('id', 1)->update(
        	['avater' 		=> 'avater'],
        	['username'     => 'username'],
        	['occupation'   => 'occupation']
        );
		$this->call('GET', 'user/edit');
		$this->assertResponseOk();
	}

}
