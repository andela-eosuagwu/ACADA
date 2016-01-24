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
    public function postLike(Request $request)
    {
       

        $video        = $this->videoRepository->findVideoById($request['video_id']);
        $video->likes = $video->likes + 1;
        $video->save();

        return $this->likeRepository->insertIntoLikesTable($request['video_id'], $request['user_id']);
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
