<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class HomePageTest extends TestCase
{

	/**
	 * Test the loading of the homepage
	 */
	public function testHomePageLoadsCorrectly()
	{
		$this->call('GET','/');
		$this->assertResponseOk();
	}

	/**
	 * See logo on page nav bar
	 */
	public function testHomePageHasLogo()
	{
		$this->visit('/')
		  ->see('What are you looking for?');
	}

	/**
	 * See login link
	 */
	public function testHomePageHasLoginLink()
	{
		$this->visit('/')
		  ->seeLink('Login');
	}

	public function testPageHasFaceBookLogin()
	{
		$this->visit('/login')
			->see('facebook');
	}

	public function testPageHasTwitterLogin()
	{
		$this->visit('/login')
			->see('twitter');
	}

	public function testPageHasGithubLogin()
	{
		$this->visit('/login')
			->see('github');
	}

	public function testHomePageHasRegisterLink()
	{
		$this->visit('/')
		  ->seeLink('Register');
	}
}
