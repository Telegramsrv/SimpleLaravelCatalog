<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
	protected $primaryKey = 'review_id';

    public function product()
    {
    	return $this->belongsTo('App\Product','product_id','product_id');
    }
}
