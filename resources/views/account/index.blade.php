@extends('layouts.app')
@section('content')
    <div class="container">
        <h2>Добро пожаловать! {{ Auth::user()->name }}</h2>
        <hr>

        @if(Auth::user()->is_admin)
            <a href="{{ route('admin.index') }}">Перейти в панель администратора</a>
        @endif
    </div>
@endsection
