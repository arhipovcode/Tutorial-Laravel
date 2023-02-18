<nav class="header-nav">
    <ul class="header-nav-ul">
        <li class="header-nav__li"><a href="/" class="header-nav__link @if(request()->routeIs('main')) active_nav @endif">Главная</a></li>
        <li class="header-nav__li"><a href="{{ route('news') }}" class="header-nav__link @if(request()->routeIs('news*')) active_nav @endif">Новости</a></li>
        <li class="header-nav__li"><a href="{{ route('users.index') }}" class="header-nav__link @if(request()->routeIs('users.*')) active_nav @endif">Пользователи</a></li>
        <li class="header-nav__li"><a href="" class="header-nav__link">Категории</a></li>
    </ul>
    @yield('btn-admin')
</nav>
