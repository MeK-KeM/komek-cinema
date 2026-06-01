@props(['menu' => []])

<footer class="footer">
    <div class="container">
        <div class="footer__top">
            <div class="footer__col footer__col--logo">
                <x-logo variant="footer" />
            </div>

            <div class="footer__col">
                <div class="footer__contacts">
                    <a href="mailto:admin@example.com">admin@example.com</a>
                    <a href="mailto:ticket@example.com">ticket@example.com</a>
                </div>
                <span class="muted">улица Тестовая 1</span>
            </div>

            <div class="footer__col">
                <strong>+7 (775) 000 00 01</strong>
                <span class="muted">Касса</span>
            </div>

            <span class="footer__spacer"></span>

            <div class="footer__col">
                <strong>08:00 - 22:00 с пн.-пт.</strong>
                <span class="muted">График работы</span>
            </div>
        </div>

        <div class="footer__mid">
            <nav class="footer__menu-wrap" aria-label="Меню в подвале">
                <h4 class="footer__heading">Меню</h4>
                <div class="footer__menu">
                    @foreach ($menu as $label => $href)
                        <a href="{{ $href }}">{{ $label }}</a>
                    @endforeach
                </div>
            </nav>

            <div class="footer__pay">
                <h4 class="footer__heading">Способы оплаты:</h4>
                <div class="footer__pay-logos">
                    <x-icon name="mastercard" class="footer__pay-logo" />
                    <x-icon name="visa" class="footer__pay-logo" />
                </div>
            </div>

            <p class="footer__note">
                Все сеансы начинаются с рекламно-информационного блока.
                Точную продолжительность сеансов можно уточнить в кинотеатре.
            </p>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container footer__bottom-inner">
            <x-socials class="footer__socials" />
            <span class="footer__copy">© 2025 Все права защищены</span>
        </div>
    </div>
</footer>
