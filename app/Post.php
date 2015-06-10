<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

	protected $fillable = [
		'title',
		'sub_title',
		'content',
		'is_hot',
	];

	public function comments()
	{
		return $this->hasMany('App\Comment');
	}

}
