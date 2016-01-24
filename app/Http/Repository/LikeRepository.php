<?php

namespace ACADA\Http\Repository;

use DB;
use ACADA\Like;

class LikeRepository
{

    /*Find like where*/
    public function findLikeWhere($field, $value)
    {
        return Like::where($field, $value)->get();
    }

    /*Fine and Delete video liked by a user*/
    public function findAndDeleteLikeByUserOnVideo($user_id, $video_id)
    {
        return DB::table('likes')
        ->where('user_id', $user_id)
        ->where('video_id', $video_id)
        ->delete();
    }

    public function insertIntoLikesTable($userid, $video_id)
    {
        Like::insert(['user_id' => $userid, 'video_id' => $video_id]);
    }

    public function checkLikeStatusForUserOnvideo($likes)
    {
        $is_like_video = false;

        foreach ($likes as $like) {
            if ($like->user_id == 1) {
                $is_like_video = true;
                break;
            }
        }
        if ($is_like_video) {
            $status = "dislike";
        }
        else {
            $status = "like";
        }

        return $status;
    }
}
