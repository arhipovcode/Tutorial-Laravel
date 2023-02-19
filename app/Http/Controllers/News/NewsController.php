<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsTrait;
use App\Models\News;
use App\QueryBuilders\CategoriesQueryBuilder;
use App\QueryBuilders\NewsQueryBuilder;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    use NewsTrait;

//    public function index(): View
//    {
//        $news = new News();
////        dd($news->getNews());
//        return \view('news.news', ['news' => $news->getNews()]);
//    }

    public function index(NewsQueryBuilder $newsQueryBuilder): View
    {
//        $news = News::all();
//        dd($news);
        return \view('news.news', [
            'news' => $newsQueryBuilder->getAll()
        ]);
    }

    public function show(int $id): View
    {
        $news = new News();
//        return \view('news.newsOne', ['news' => $this->getNews($id)]);
//        dd($news->getNewsById($id));
        return \view('news.newsOne', ['news' => $news->getNewsById($id)]);
    }
}
