<?php
/**
 * Created by PhpStorm.
 * User: theardent
 * Date: 12.02.17
 * Time: 19:05
 */

namespace App\Http\Controllers;


use App\Page;

class PageController extends MainController
{
	public function getPage($slug,Page $page)
	{
		$this->data['page'] = $page->getPageBySlug($slug);
		return view('pages.single',$this->data);
	}

	public function Index()
	{
		//TODO create index Page
	}
}