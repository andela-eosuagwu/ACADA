<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileTest extends TestCase
{
    public function testExample()
    {
        $this->assertTrue(true);
    }

	public function testEditProfilePageLoadsCorrectly()
	{
        User::where('id', 1)->update(['avater'      => 'avater']);
        User::where('id', 1)->update(['username'    => "username"]);
        User::where('id', 1)->update(['occupation'  => "occupation"]);
		$this->call('GET', 'user/edit/1');
		$this->assertResponseOk();
	}

}
