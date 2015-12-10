<?php

use ACADA\Video as Video;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CreateVideoPageTest extends TestCase
{

    protected function createVideo ()
    {
        $video = Video::create([
            'src'           => 'src',
            'title'         => 'title',
            'user_id'       => 1,
            'categories'    => 'categories',
            'description'   => 'description',
        ]);

        return $video;
    }

    public function testForCreatingOneVideo()
    {
        $this->createVideo();
        $video = Video::all();
        $this->assertEquals(1, sizeof($video));
    }

}
