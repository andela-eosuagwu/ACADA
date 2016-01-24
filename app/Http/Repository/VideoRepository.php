<?php

namespace ACADA\Http\Repository;

use ACADA\User;
use ACADA\Video;

class VideoRepository
{

	/**
    * Return all Video from the database
    */
    public function getAllVideo()
    {
        return Video::with('likes','favourite')->take(4)->orderBy('created_at', 'desc')->get();
    }

    /**
    * Find Video by id
    */
    public function findVideoById($id)
    {
        return Video::find($id);
    }

    /**
    * Find Video via field = value
    */
    public function findVideoWhere($field, $value)
    {
        return Video::where($field, $value);
    }

    /**
    * Return active Video from the database
    */
    public function getActiveVideos()
    {
        return $this->getAllVideos()->where('status', 1);
    }

    /**
    * Return pending Video from the database
    */
    public function getPendingVideos()
    {
        return $this->getAllVideos()->where('status', 0);
    }
}