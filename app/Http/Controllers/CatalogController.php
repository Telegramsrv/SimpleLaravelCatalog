<?php

namespace App\Http\Controllers;


use App\Category;
use App\Product;

class CatalogController extends MainController
{

	public function index(Category $categories)
	{
		dd($categories->getCategories());
	}

	public function listPorudcts($slug, Category $categories)
	{
		dd($categories->getCategoryBySlug($slug));
	}

	public function getProduct($slug, Product $products)
	{
		dd($products->getProductBySlug($slug));
	}

	public function getAllProduct(Product $products)
	{
		dd($products->getAllAvailable());
	}
}