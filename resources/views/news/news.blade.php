@extends('layouts.main')
@section('title')
    Страница новостей
@endsection
@section('main')
    <section class="news">
        <div class="container">
            <div class="d-flex j-between">
                <h1 class="news-title">Страница новостей</h1>
            </div>

            <div class="card-grid">
                @forelse($news as $item)
                    <x-cards.news
                        :status="$item->status"
                        :category="$item->categories"
                        :title="$item->title"
                        :description="$item->description"
                        :author="$item->author"
                        :date="$item->created_at"
                        :linkEdit="route('admin.news.edit', ['news' => $item])"
                        :link="route('news::one', ['id' => $item->id])">
                    </x-cards.news>
                @empty
                    <h2>Новостей нет</h2>
                @endforelse
            </div>
        </div>
    </section>
@endsection
