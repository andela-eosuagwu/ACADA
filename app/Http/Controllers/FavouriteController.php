<?php

namespace ACADA\Http\Controllers;

use ACADA\Http\Requests;
use Illuminate\Http\Request;
use ACADA\Http\Controllers\Controller;

class FavouriteController extends Controller
{

    public function favourite()
    {
        $video        = $this->videoRepository->findVideoById(1);
        $video->favourite = $video->favourite + 1;
        $video->save();

        return $this->favouriteRepository->insertIntoFavouriteTable(1, 1);
    }

    public function unFavourite()
    {
        $video              = $this->videoRepository->findVideoById(1);
        $video->favourite   = $video->favourite - 1;
        $video->save();

        $this->favouriteRepository->findAndDeleteFavouriteByUserOnVideo(1, 1);
    }
}
