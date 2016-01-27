<?php

namespace ACADA;

use ACADA\User;
use ACADA\Video;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
	protected $table = 'favourites';

	protected $fillable = ['user_id', 'video_id'];

	public function user()
    {
        return $this->belongsTo('ACADA\User');
    }

	public function video()
    {
        return $this->belongsTo('ACADA\Video');
    }
}
