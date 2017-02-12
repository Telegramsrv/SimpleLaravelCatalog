<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
	protected $primaryKey = 'gallery_id';

    public function product()
    {
    	return $this->belongsTo('App\Product','product_id','product_id');
    }
}
