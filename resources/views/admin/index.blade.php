@extends('layouts.admin')
@section('title')
    Административная панель
@endsection
@section('main')
    <section class="admin">
        <div class="container">
            <h1>Административная панель</h1>

            <a style="margin-top: 20px;display: inline-block" href="{{ route('admin.news.create') }}">Добавить новость</a>
        </div>
    </section>
@endsection
