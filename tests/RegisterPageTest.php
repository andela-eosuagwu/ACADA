<?php

use ACADA\User as User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegisterPageTest extends TestCase
{

    protected function createUser ()
    {
        $user = User::create([
            'username'  => 'test',
            'password'  => 'test',
            'email'     => 'test@test.com'
        ]);
        return $user;
    }

    public function testForCreatingOneUser()
    {
        $this->createUser();
        $user = User::all();
        $this->assertEquals(1, sizeof($user));
    }

}
