@php
    $nav = [
        'Афиша'     => url('/'),
        'Сеансы'    => '#',
        'Кинотеатр' => '#',
        'Контакты'  => '#',
    ];
    $tabs = ['Сегодня', 'Завтра', 'Воскресенье, 10 сент.', 'Понедельник, 11 сент.', 'Вторник, 12 сент.', 'Среда, 13 сент.'];
    $footerMenu = [
        'Афиша'           => url('/'),
        'Сеансы'          => '#',
        'Пушкинская карта' => '#',
        'Кинотеатр'       => '#',
        'Контакты'        => '#',
    ];
@endphp

<x-layout title="Афиша — KOMEK by ticket">
    <x-site-header :nav="$nav" :tabs="$tabs" />

    <main class="afisha">
        <div class="container">
            <h1 class="sr-only">Афиша кинотеатра на сегодня</h1>
            <div class="movies">
                @foreach ($movies as $movie)
                    <x-movie-card :movie="$movie" />
                @endforeach
            </div>
        </div>
    </main>

    <x-site-footer :menu="$footerMenu" />
</x-layout>
