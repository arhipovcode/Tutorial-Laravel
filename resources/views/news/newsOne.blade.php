@extends('layouts.main')
@section('title')
    {{ $news['title'] }}
@endsection
@section('main')
    <section class="news-one">
        <div class="container">
            <x-cards.news-one
                :title="$news['title']"
                :description="$news['description']"
                :author="$news['author']"
                :date="$news['created_at']">
            </x-cards.news-one>
        </div>
    </section>
@endsection
