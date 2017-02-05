<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;

class CatalogController extends MainController
{

	public function index(Category $categories)
	{
		$this->data['categories'] = $categories->getCategories();
		return view('category.list',$this->data);
	}

	public function listPorudcts($slug, Category $categories)
	{
		$this->data['products'] = $categories->getCategoryBySlug($slug);
		return view('product.list',$this->data);
	}

	public function getProduct($slug, Product $products)
	{
		$this->data['product'] = $products->getProductBySlug($slug);
		return view('product.index',$this->data);
	}

	public function getAllProduct(Product $products)
	{
		$this->data['products'] = $products->getAllAvailable();
		return view('product.list',$this->data);
	}
}