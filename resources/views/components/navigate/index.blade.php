<nav class="header-nav">
    <ul class="header-nav-ul">
        <li class="header-nav__li"><a href="/" class="header-nav__link">Главная</a></li>
        <li class="header-nav__li"><a href="{{ route('news') }}" class="header-nav__link">Новости</a></li>
        <li class="header-nav__li"><a href="" class="header-nav__link">Категории</a></li>
        <li class="header-nav__li"><a href="" class="header-nav__link">Пользователи</a></li>
    </ul>
    @yield('btn-admin')
</nav>
