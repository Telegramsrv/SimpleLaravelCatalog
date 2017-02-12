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
}
