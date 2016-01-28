<?php

namespace ACADA\Http\Repository;

use DB;
use ACADA\Like;
use Auth;

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

    public function checkLikeStatusForUserOnEpisode($likes)
    {
        $is_like_episode = false;
        
        if (! Auth::check() ) {
            return "must_login";
        }

        foreach ($likes as $like) {
            if ($like->user_id == Auth::user()->id) {
                $is_like_episode = true;
                break;
            }
        }
        if ($is_like_episode) {
            $status = "dislike";
        }
        else {
            $status = "like";
        }
        return $status;
    }
}
