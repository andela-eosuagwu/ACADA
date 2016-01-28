<?php

namespace ACADA\Http\Controllers;

use ACADA\Http\Requests;
use Illuminate\Http\Request;
use ACADA\Http\Controllers\Controller;

class FavouriteController extends Controller
{

    public function favourite(Request $request)
    {
        $video        = $this->videoRepository->findVideoById($request['video_id']);
        $video->favourite = $video->favourite + 1;
        $video->save();

        $this->favouriteRepository->insertIntoFavouriteTable($request['user_id'], $request['video_id']);

    }

    public function unfavourite(Request $request)
    {
        $video              = $this->videoRepository->findVideoById($request['video_id']);
        $video->favourite   = $video->favourite - 1;
        $video->save();

        $this->favouriteRepository->findAndDeleteFavouriteByUserOnVideo($request['user_id'], $request['video_id']
            );

return 444;
    }
}
