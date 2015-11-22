<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase
{

	public function testHomePageLoadsCorrectly()
	{
		$this->call('GET','/');
		$this->assertResponseOk();
	}

	public function testHomePageHasLogo()
	{
		$this->visit('/')
		  ->see('What are you looking for?');
	}

	public function testPageHasFaceBookLogin()
	{
		$this->visit('/')
			->see('facebook');
	}

	public function testPageHasTwitterLogin()
	{
		$this->visit('/')
			->see('twitter');
	}

	public function testPageHasGithubLogin()
	{
		$this->visit('/')
			->see('github');
	}

	public function testHomePageHasRegisterLink()
	{
		$this->visit('/')
		  ->seeLink('Register');
	}
}
