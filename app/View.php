<?php

namespace ACADA;

use ACADA\User;
use ACADA\Video;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
	protected $table = 'views';

	protected $fillable = ['user_id', 'video_id'];

	public function user()
	{
		return $this->belongsTo('ACADA\User');
	}
}
