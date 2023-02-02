@extends('layouts.main')
@section('title')
    Страница новостей
@endsection
@section('main')
    <section class="news">
        <div class="container">
            <h1 class="news-title">Страница новостей</h1>

            <div class="card-grid">
                @forelse($news as $item)
                    <x-cards.news
                        :title="$item['title']"
                        :description="$item['description']"
                        :author="$item['author']"
                        :date="$item['created_at']"
                        :link="route('news::one', ['id' => $item['id']])">
                    </x-cards.news>
                @empty
                    <h2>Новостей нет</h2>
                @endforelse
            </div>
        </div>
    </section>
@endsection
