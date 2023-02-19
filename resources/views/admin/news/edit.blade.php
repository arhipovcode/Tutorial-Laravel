@extends('layouts.admin')
@section('title')
    Admin - update
@endsection
@section('main')
    <section class="create-news">
        <div class="container">
            <h2 class="create-news-title">Редактировать новость</h2>

            <form method="post" action="{{ route('admin.news.update', ['news' => $news]) }}" class="form-create-news">
                @csrf
                @method('put')
                <div class="group-field">
                    <label for="category_id" class="form-create-news__label">Категория</label>
                    <select name="category_id" id="category_id">
                        <option value="0">Выбрать</option>
                        @foreach($categories as $category)
                            <option @if((int) old('category_id') === $category->id) selected @endif value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="group-field">
                    <label for="title" class="form-create-news__label">Заголовок</label>
                    <input type="text" id="title" name="title" value="{{ $news->title }}" class="form-create-news__input" placeholder="Введите заголовок">
                </div>
                <div class="group-field">
                    <label for="author" class="form-create-news__label">Автор</label>
                    <input type="text" id="author" name="author" value="{{ $news->author }}" class="form-create-news__input" placeholder="Введите имя">
                </div>
                <div class="group-field">
                    <label for="status" class="form-create-news__label">Статус</label>
                    <select name="status" id="status">
                        @foreach($statuses as $status)
                            <option @if($news->status === $status) selected @endif>{{ $status }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="group-field">
                    <label for="image" class="form-create-news__label">Изображение</label>
                    <input type="file" id="image" name="image" class="form-create-news__input">
                </div>
                <div class="group-field">
                    <label for="description_news" class="form-create-news__label">Описание</label>
                    <textarea id="description_news" name="description" cols="20" rows="5" class="form-create-news__input" placeholder="Введите текст">{{ $news->description }}</textarea>
                </div>

                <button type="submit" class="form-create-news__save">Сохранить</button>
            </form>
        </div>
    </section>
@endsection

