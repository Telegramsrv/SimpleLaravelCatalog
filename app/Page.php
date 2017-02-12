<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $primaryKey = 'page_id';

    public function getPageBySlug($slug)
    {
    	return $this->where('slug',$slug)->firstOrFail();
    }
}
