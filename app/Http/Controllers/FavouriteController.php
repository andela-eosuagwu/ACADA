<?php

namespace ACADA\Http\Controllers;

use ACADA\Http\Requests;
use Illuminate\Http\Request;
use ACADA\Http\Controllers\Controller;

class FavouriteController extends Controller
{

    public function favourite($video_id, $user_id)
    {
        $video        = $this->videoRepository->findVideoById($video_id);
        $video->favourite = $video->favourite + 1;
        $video->save();

        $this->favouriteRepository->insertIntoFavouriteTable($video_id, $user_id);

        return redirect()->back();

    }

    public function unfavourite($video_id, $user_id)
    {
        $video              = $this->videoRepository->findVideoById($video_id);
        $video->favourite   = $video->favourite - 1;
        $video->save();

        $this->favouriteRepository->findAndDeleteFavouriteByUserOnVideo($video_id, $user_id
            );
        return redirect()->back();
    }
}
