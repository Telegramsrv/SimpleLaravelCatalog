<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;

class NewsController extends MainController
{

    public function getAllNews(News $news)
    {
        $this->data['news'] = $news->getNews();
        return view('news.index',$this->data);
    }

    public function getSingleNews($slug, News $news)
    {
        $this->data['article'] = $news->getOneNews($slug);
        return view('news.single',$this->data);
    }



}
