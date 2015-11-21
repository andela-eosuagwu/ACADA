<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    
	protected $fillable = ['src', 'title', 'category', 'user_id'];

	public function user ()
	{
		return $this->belongsTo('App\User');
	}
}
