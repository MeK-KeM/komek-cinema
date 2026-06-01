@props(['nav' => [], 'tabs' => []])

{{-- Hero banner: background image set in CSS (resources/images/hero-aquaman.jpg) --}}
<header class="hero" role="banner" aria-label="Аквамен — в кино с 13 декабря"></header>

{{-- Dark teal contact strip --}}
<div class="topbar">
    <div class="container topbar__inner">
        <x-logo />

        <div class="topbar__info topbar__info--addr">
            <strong>Казахстан</strong>
            <span>улица Тестовая 1</span>
        </div>

        <div class="topbar__info topbar__info--phone">
            <strong>+7 (775) 000 00 01 <x-icon name="chevron" class="topbar__chev" /></strong>
            <span>Касса</span>
        </div>

        <span class="topbar__spacer"></span>

        <x-socials class="topbar__socials" />

        <button type="button" class="btn topbar__ticket">Мне пришёл билет</button>
    </div>
</div>

{{-- White navigation bar --}}
<nav class="navbar" data-navbar aria-label="Основная навигация">
    <div class="container navbar__inner">
        <span class="navbar__label">Меню</span>

        <button type="button" class="navbar__burger" data-burger aria-label="Открыть меню" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <div class="navbar__collapse">
            <div class="navbar__links">
                @foreach ($nav as $label => $href)
                    <a href="{{ $href }}" @class(['is-active' => $loop->first])>{{ $label }}</a>
                @endforeach
            </div>

            <div class="navbar__actions">
                <button type="button" class="btn">Войти</button>
                <button type="button" class="btn">Написать отзыв</button>
            </div>
        </div>
    </div>
</nav>

{{-- Date filter tabs --}}
<x-date-tabs :tabs="$tabs" />
