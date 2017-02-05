<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public function getMenu()
    {
    	return $this->orderBy('weight')->get();
    }
}
