@extends('layouts.main')
@section('title')
    User create
@endsection
@section('main')
    <section class="welcome">
        <div class="container">
            <h1 style="margin-bottom: 40px">Hello User... </h1>

            <form method="post" action="{{ route('user.add.store') }}" class="form-user">
                @csrf
                <div class="group-field">
                    <label for="user-name" class="form-create-news__label">Имя</label>
                    <input type="text" id="user-name" name="user-name" value="{{ old('user-name') }}" class="form-create-news__input" placeholder="Введите имя">
                </div>
                <div class="group-field">
                    <label for="user-lastname" class="form-create-news__label">Фамилия</label>
                    <input type="text" id="user-lastname" name="user-lastname" value="{{ old('user-lastname') }}" class="form-create-news__input" placeholder="Введите фамилию">
                </div>
                <div class="group-field">
                    <label for="user-review" class="form-create-news__label">Отзыв о компании</label>
                    <textarea id="user-review" name="user-review" cols="20" rows="5" class="form-create-news__input" placeholder="Напшите свой отзыв">
                        {{ old('user-review') }}
                    </textarea>
                </div>

                <button type="submit" class="form-create-news__save">Сохранить</button>
            </form>
        </div>
    </section>
@endsection
