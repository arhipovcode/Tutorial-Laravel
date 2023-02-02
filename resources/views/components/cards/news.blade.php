<div class="card-news">
    <h3 class="card-news__title">{{ $title }}</h3>

    <p class="card-news__description">{{ $description }}</p>

    <div class="card-news__author">
        <p class="card-news__author-name">{{ $author }}</p>
        <p class="card-news__author-date">{{ $date }}</p>
    </div>

    <a class="card-news__link" href="{{ $link }}">
        Посмотреть новость
    </a>
</div>
