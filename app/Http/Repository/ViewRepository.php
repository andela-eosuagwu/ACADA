<?php

namespace ACADA\Http\Repository;

use DB;
use ACADA\View;

class ViewRepository
{

    /*Find like where*/
    public function findLikeWhere($field, $value)
    {
        return Like::where($field, $value)->get();
    }

    public function insertIntoViewTable($userid, $video_id)
    {

        View::insert(['user_id' => $userid, 'video_id' => $video_id]);
    }
}
