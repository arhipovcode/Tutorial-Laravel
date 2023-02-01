<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Http\Controllers\NewsTrait;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    use NewsTrait;

    public function index() {
        return view('news.news', ['news' => $this->getNews()]);
    }

    public function show(int $id) {
        return view('news.newsOne', ['news' => $this->getNews($id)]);
    }
}
