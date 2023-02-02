<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsTrait;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NewsController extends Controller
{
    use NewsTrait;

    public function index(): View
    {
        return \view('news.news', ['news' => $this->getNews()]);
    }

    public function show(int $id): View
    {
        return \view('news.newsOne', ['news' => $this->getNews($id)]);
    }
}
