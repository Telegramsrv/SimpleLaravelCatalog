<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __contruct()
    {
    	$this->data = [];//All Controllers extends MainController
	    //TODO add to $this->data nav bar
    }
}
