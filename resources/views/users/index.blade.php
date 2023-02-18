@extends('layouts.main')
@section('title')
    User create
@endsection
@section('main')
    <section class="welcome">
        <div class="container">
            <h1 style="margin-bottom: 40px">Hello User... {{$nameUser ?? ''}}</h1>



            <a href="{{ route('users.add.create') }}" class="add-user-btn">Добавить пользователя</a>
        </div>
    </section>
@endsection
