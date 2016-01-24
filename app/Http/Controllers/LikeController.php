<?php

namespace ACADA\Http\Controllers;

use Illuminate\Http\Request;

use ACADA\Http\Requests;
use ACADA\Http\Controllers\Controller;

class LikeController extends Controller
{
    /*
    # postLike
    */
    public function postLike()
    {
        $video        = $this->videoRepository->findVideoById(1);
        $video->likes = $video->likes + 1;
        $video->save();

        return $this->likeRepository->insertIntoLikesTable(1, 1);
    }

    /*
    # postDisLike
    */
    public function postUnLike()
    {
        $video        = $this->videoRepository->findVideoById(1);
        $video->likes = $video->likes - 1;
        $video->save();

        $this->likeRepository->findAndDeleteLikeByUserOnVideo(1, 1);
    }
}
