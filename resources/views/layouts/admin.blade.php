<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('./assets/css/style.css') }}">
</head>
<body>
    <header class="header">
        <div class="container">
            <x-navigate.index>
                @section('btn-admin')
                    <a href="{{ route('account.logout') }}" class="btn-out">Выйти</a>
                @endsection
            </x-navigate.index>
        </div>
    </header>

    <main class="main">
        @yield('main')
    </main>

    <footer class="footer">
        <div class="container">
            <h2>Новостной портал</h2>
        </div>
        @yield('footer')
    </footer>

    <script src=""></script>
</body>
</html>
