<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Demo afisha data (in a real app this would come from a database / API)
    $movies = [
        [
            'title'  => 'Праздники',
            'poster' => asset('images/posters/prazdniki.svg'),
            'badge'  => 'ПРЕМЬЕРА',
            'age'    => '12+',
            'genres' => ['комедия'],
            'sessions' => [
                ['time' => '15:35', 'price' => '1233', 'hall' => 'Зал 3'],
                ['time' => '17:40', 'price' => '3080', 'hall' => 'Зал 6 VIP'],
                ['time' => '19:15', 'price' => '1700', 'hall' => 'Зал 4'],
                ['time' => '21:05', 'price' => '1700', 'hall' => 'Зал 3'],
                ['time' => '21:40', 'price' => '4030', 'hall' => 'Зал 6 VIP'],
                ['time' => '22:45', 'price' => '1700', 'hall' => 'Зал 3'],
            ],
        ],
        [
            'title'  => 'Мег 2: Бездна',
            'poster' => asset('images/posters/meg2.svg'),
            'age'    => '16+',
            'genres' => ['экшен', 'триллер'],
            'sessions' => [
                ['time' => '15:35', 'price' => '4030', 'hall' => 'Зал 6 VIP'],
                ['time' => '17:40', 'price' => '3080', 'hall' => 'Зал 2 Auro'],
                ['time' => '19:15', 'price' => '1700', 'hall' => 'Зал 4'],
            ],
        ],
        [
            'title'  => 'Заложники',
            'poster' => asset('images/posters/zalozhniki.svg'),
            'age'    => '16+',
            'genres' => ['экшен', 'триллер'],
            'sessions' => [
                ['time' => '16:10', 'price' => '4030', 'hall' => 'Зал 1'],
                ['time' => '21:30', 'price' => '3080', 'hall' => 'Зал 1'],
            ],
        ],
        [
            'title'  => 'Леди Баг и Супер-Кот: Пробуждение силы',
            'poster' => asset('images/posters/ladybug.svg'),
            'age'    => '6+',
            'genres' => ['фентези', 'боевик', 'мелодрама', 'мультфильм', 'комедия'],
            'sessions' => [
                ['time' => '16:10', 'price' => '4030', 'hall' => 'Зал 1'],
                ['time' => '21:30', 'price' => '3080', 'hall' => 'Зал 1'],
            ],
        ],
        [
            // Intentionally has no poster — shows the "broken image" placeholder
            'title'  => 'Когда не загрузилась афиша',
            'poster' => null,
            'genres' => ['комедия'],
            'sessions' => [
                ['time' => '15:35', 'price' => '1233', 'hall' => 'Зал 3'],
                ['time' => '17:40', 'price' => '3080', 'hall' => 'Зал 6 VIP'],
            ],
        ],
        [
            'title'  => 'Руслан и Людмила. Больше, чем сказка',
            'poster' => asset('images/posters/ruslan.svg'),
            'badge'  => 'ПРЕМЬЕРА',
            'age'    => '6+',
            'genres' => ['анимационое приключение'],
            'cta'    => 'Сеансы на Завтра',
        ],
    ];

    return view('afisha', compact('movies'));
});
