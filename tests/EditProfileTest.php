<?php

use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class EditProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertTrue(true);
    }

	public function testEditProfilePageLoadsCorrectly()
	{
		$user = factory(User::class)->create();
		$this->actingAs($user)
		  ->withSession(['name' => 'johndoe'])
		  ->visit('/user/update');	
		$this->call('GET', 'user/edit/1');
		$this->assertResponseOk();
	}

	public function createUser()
	{
		return User::create([
            'src'       => "link",
            'title'     => "title",
            'user_id'   => 1,
            'category'  => "java",
		]);
	}
}
