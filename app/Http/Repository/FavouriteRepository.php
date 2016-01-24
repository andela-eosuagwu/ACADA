<?php

namespace ACADA\Http\Repository;

use DB;
use ACADA\Favourite;

class FavouriteRepository
{

    public function insertIntoFavouriteTable($userid, $video_id)
    {
        Favourite::insert(['user_id' => $userid, 'video_id' => $video_id]);
    }

    public function findAndDeleteFavouriteByUserOnVideo($user_id, $video_id)
    {
        return DB::table('favourites')
        ->where('user_id', $user_id)
        ->where('video_id', $video_id)
        ->delete();
    }
}
