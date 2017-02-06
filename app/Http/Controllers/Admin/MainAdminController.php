<?php

namespace App\Http\Controllers\Admin;

class MainAdminController
{
	public function __construct()
	{
		$this->data = [];//All Controllers extends MainController
		$this->data['menu'] = [];
	}
}
