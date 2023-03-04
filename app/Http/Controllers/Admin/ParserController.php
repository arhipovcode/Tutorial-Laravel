<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\JobNewsParsing;
use App\Services\Contracts\Parser;
use Illuminate\Http\Request;

class ParserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param Parser $parser
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Parser $parser)
    {
        $links = [
            'https://www.vedomosti.ru/rss/articles',
            'https://www.vedomosti.ru/rss/issue',
            'https://www.vedomosti.ru/rss/library/characters',
            'https://www.vedomosti.ru/rss/library/investigations',
            'https://www.vedomosti.ru/rss/rubric/business',
            'https://www.vedomosti.ru/rss/rubric/business/energy',
            'https://www.vedomosti.ru/rss/rubric/business/industry',
            'https://www.vedomosti.ru/rss/rubric/business/transport',
            'https://www.vedomosti.ru/rss/rubric/business/agriculture',
            'https://www.vedomosti.ru/rss/rubric/business/retail',
            'https://www.vedomosti.ru/rss/rubric/business/sport',
            'https://www.vedomosti.ru/rss/rubric/technology',
            'https://www.vedomosti.ru/rss/rubric/technology/telecom',
            'https://www.vedomosti.ru/rss/rubric/technology/internet',
            'https://www.vedomosti.ru/rss/rubric/technology/media',
            'https://www.vedomosti.ru/rss/rubric/technology/it_business',
            'https://www.vedomosti.ru/rss/rubric/technology/personal_technologies',
            'https://www.vedomosti.ru/rss/rubric/technology/hi_tech',
            'https://www.vedomosti.ru/rss/rubric/realty',
            'https://www.vedomosti.ru/rss/rubric/realty/housing',
            'https://www.vedomosti.ru/rss/rubric/realty/districts',
            'https://www.vedomosti.ru/rss/rubric/realty/architecture',
        ];

        foreach($links as $link) {
            \dispatch(new JobNewsParsing($link));
        }

        return "Parsing completed";
    }
}
