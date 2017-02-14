<?php
/**
 * Created by PhpStorm.
 * User: theardent
 * Date: 12.02.17
 * Time: 19:05
 */

namespace App\Http\Controllers;

use App\News;
use App\Product;
use App\Slider;
use App\Page;

class PageController extends MainController
{
	public function getPage($slug,Page $page)
	{
		$this->data['page'] = $page->getPageBySlug($slug);
		return view('pages.single',$this->data);
	}

	public function Index(Slider $slider,Product $product,News $news)
	{
		$this->data['sliders'] = $slider->getSlider();
		$this->data['products'] = $product->getTopRated(6);
		$this->data['news'] = $news->getLastNews(5);
		return view('pages.index',$this->data);
	}
}