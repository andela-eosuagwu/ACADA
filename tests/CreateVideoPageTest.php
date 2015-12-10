<?php

use ACADA\Video as Video;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateVideoPageTest extends TestCase
{
    public function testVideoUpload()
    {
        $user = factory(\ACADA\User::class)->create();

        $this->actingAs($user)
             ->visit('/video/create');
        
            $this->type('video title', 'title')
                   ->type('some random text', 'description')
                   ->type('https://www.youtube.com/watch?v=7KAhgrBDl3A', 'src')
                   ->select('php', 'categories')
                   ->press('Create');
            $this->assertResponseOk();
    }

}
