<div class="card-news">
    <span class="card-news__status">Статус: {{ $status??'' }}</span>

    @if($image)
        <div class="card-news__image">
            <img src="{{ Storage::disk('public')->url($image) }}" alt="">
        </div>
    @endif

    <h3 class="card-news__title">{{ $title }}</h3>

    <p class="card-news__description">{{ $category->map(fn($item) => $item->title)->implode(", ") }}</p>

    <p class="card-news__description">{{ $description }}</p>

    <div class="card-news__author">
        <p class="card-news__author-name">{{ $author }}</p>
        <p class="card-news__author-date">{{ $date }}</p>
    </div>

    <div class="d-flex j-between">
        <a class="card-news__link btn__warning" href="{{ $linkEdit }}">
            Изменить новость
        </a>
        <a class="card-news__link" href="{{ $link }}">
            Посмотреть новость
        </a>
        <a class="card-news__link btn__delete" id="{{ $id }}" href="javascript:;">
            Удалить
        </a>
    </div>
</div>
