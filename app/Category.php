<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	public function getAvailableProducts()
	{
		return $this->products()->available()->orderBy('weight');
	}

	public function products()
	{
		return $this->hasMany('App\Product','category_id','category_id');
	}

	public function getCategories()
	{
		return $this->orderBy('weight')->get();
	}

	public function getCategoryBySlug($slug)
	{
		return $this->where('slug',$slug)->firstOrFail()->getAvailableProducts()->paginate(12);
	}
}
