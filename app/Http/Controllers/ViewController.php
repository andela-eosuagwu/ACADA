<?php

namespace ACADA\Http\Controllers;

use ACADA\Http\Requests;
use Illuminate\Http\Request;
use ACADA\Http\Controllers\Controller;

class ViewController extends Controller
{
    public function view()
    {
        $video        		= $this->videoRepository->findVideoById(1);
        $video->views 	    = $video->views + 1;
        $video->save();

        return $this->viewRepository->insertIntoViewTable(1, 1);
    }
}
