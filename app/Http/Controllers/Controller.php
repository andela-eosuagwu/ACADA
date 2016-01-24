<?php

namespace ACADA\Http\Controllers;

use ACADA\Http\Repository\LikeRepository;
use ACADA\Http\Repository\ViewRepository;
use ACADA\Http\Repository\VideoRepository;
use ACADA\Http\Repository\FavouriteRepository;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
    	$this->likeRepository 		= new LikeRepository;
    	$this->viewRepository 		= new ViewRepository;
    	$this->videoRepository 		= new VideoRepository;
    	$this->favouriteRepository 	= new FavouriteRepository;
    }
}
