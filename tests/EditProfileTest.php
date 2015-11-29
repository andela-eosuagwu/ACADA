<?php

use ACADA\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileTest extends TestCase
{

	public function testEditProfilePageLoadsCorrectly()
	{
		$user = factory(User::class)->create();
		$this->actingAs($user)
		  ->withSession(['name' => 'johndoe'])
		  ->visit('/user/edit');
		
		$this->call('GET', '/user/edit');
		$this->assertResponseOk();
	}

	public function testUserUpdateWorks()
	{
		$user = factory(User::class)->create();
		$this->actingAs($user)
		  ->withSession(['name' => 'johndoe']);

		$this->visit('user/edit')
			->type('username', 'username')
			->type('occupation', 'occupation')
			->press('update')
			->seePageIs("/user");
	}
}
