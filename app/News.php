<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
	protected $primaryKey = 'news_id';

    public function getNews()
    {
        return $this->orderBy('news_id', 'desc')->get();
    }

    public function getOneNews($slug)
    {
        return $this->where('slug',$slug)->firstOrFail();
    }
}
