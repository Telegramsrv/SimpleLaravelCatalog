<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends MainController
{

    public function getAllNews(News $news)
    {
        dd($news->getNews());
    }

}
