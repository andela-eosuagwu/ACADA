<?php

namespace ACADA\Http\Controllers;

use Illuminate\Http\Request;

use ACADA\Http\Requests;
use Illuminate\Http\RedirectResponse;
use ACADA\Http\Controllers\Controller;

class LikeController extends Controller
{
    /*
    # postLike
    */
    public function postLike($video_id, $user_id)
    {
        $video        = $this->videoRepository->findVideoById($video_id);
        $video->likes = $video->likes + 1;
        $video->save();

        $this->likeRepository->insertIntoLikesTable($video_id, $user_id);
        return redirect()->back();
    }

    /*
    # postDisLike
    */
    public function postUnLike($video_id, $user_id)
    {
        $video        = $this->videoRepository->findVideoById($video_id);
        $video->likes = $video->likes - 1;
        $video->save();

        $this->likeRepository->findAndDeleteLikeByUserOnVideo($video_id, $user_id);
        return redirect()->back();
    }
}
