<?php

namespace App\Http\Controllers;

use App\Menu;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct(Menu $menu)
    {
    	$this->data = [];//All Controllers extends MainController
	    $this->data['menu'] = $menu->getMenu();
    }
}
