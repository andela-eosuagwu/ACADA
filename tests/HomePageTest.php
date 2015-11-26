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

	public function testHomeHasSearchTitle()
	{
		$this->visit('/')
		  ->see('What are you looking for?');
	}
}
