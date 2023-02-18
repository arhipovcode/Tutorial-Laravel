<?php

namespace App\QueryBuilders;

use App\Models\News;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

final class NewsQueryBuilder extends QueryBuilder
{

    public Builder $model;

    public function __construct()
    {
        $this->model = News::query();
    }

    public function getNewsByStatus(string $status): Collection
    {
        return News::query()->where('status', $status)->get();
    }

    function getAll(): Collection
    {
        return News::query()->with('categories')->get();
    }
}
