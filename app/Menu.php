<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
	protected $primaryKey = 'menu_id';

    public function getMenu()
    {
    	return $this->orderBy('weight')->get();
    }

    public function childs()
    {
    	return $this->hasMany('App\Menu', 'parent_id','menu_id')->orderBy('weight')->get();
    }

    public function parent()
    {
		return $this->belongsTo('App\Menu', 'parent_id', 'menu_id');
    }

    public function isParent()
    {
    	return !empty($this->childs()->count());
    }

    public function isChild()
    {
	    return !empty($this->parent()->count());
    }
}
