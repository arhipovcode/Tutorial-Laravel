@extends('layouts.main')
@section('title')
    Страница новостей
@endsection
@section('main')
    <section class="news">
        <div class="container">
            <div class="d-flex j-between">
                <h1 class="news-title">Страница новостей</h1>
            </div>

            <div class="card-grid">
                @forelse($news as $item)
                    <x-cards.news
                        :status="$item->status"
                        :category="$item->categories"
                        :title="$item->title"
                        :description="$item->description"
                        :author="$item->author"
                        :date="$item->created_at"
                        :id="$item->id"
                        :linkEdit="route('admin.news.edit', ['news' => $item])"
                        :link="route('news::one', ['id' => $item->id])">
                    </x-cards.news>
                @empty
                    <h2>Новостей нет</h2>
                @endforelse
            </div>
        </div>
    </section>
@endsection
@push('js')
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', ready);

        function ready() {
            let linksDestroyed = document.querySelectorAll('.btn__delete');

            if(linksDestroyed.length) {
                linksDestroyed.forEach((el) => {
                    el.addEventListener('click', (e) => {
                        e.preventDefault();
                        const id = e.target.getAttribute('id');
                        if(confirm(`Подтверждаете удаление записи с #ID = ${id}`)) {
                            send(`/admin/news/${id}`).then(() => {
                                location.reload();
                            });
                        } else {
                            console.log('Удаление отменено!')
                        }
                    })
                })
            }
        }

        async function send(url) {
            let response = await fetch(url, {
                method: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                }
            })
            let result = response.json();
            return result.ok;
        }
    </script>
@endpush
