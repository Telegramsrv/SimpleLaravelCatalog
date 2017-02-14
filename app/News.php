<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $primaryKey = 'news_id';

	public function scopeAvailable($query)
	{
		return $query->where('created_at','<=',date('Y-m-d H:m:s',time()));
	}

    public function getNews()
    {
        return $this->available()->orderBy('news_id', 'desc')->get();
    }

    public function getOneNews($slug)
    {
        return $this->where('slug',$slug)->firstOrFail();
    }

    public function getLastNews($count)
    {
		return $this->getNews()->take($count);
    }
}
