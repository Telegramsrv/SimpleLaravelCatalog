<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $primaryKey = 'slider_id';

    public function getSlider()
    {
    	return $this->available()->orderBy('weight')->get();
    }

	public function scopeAvailable($query)
	{
		return $query->where('available','1');
	}
}
