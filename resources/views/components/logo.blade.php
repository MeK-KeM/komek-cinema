@props(['variant' => 'header'])

<a href="{{ url('/') }}" class="logo {{ $variant === 'footer' ? 'logo--footer' : '' }}" aria-label="KOMEK by ticket">
    <svg class="logo__mark" width="46" height="40" viewBox="0 0 46 40" fill="none" aria-hidden="true">
        <rect x="1" y="6" width="44" height="28" rx="4" fill="#fff"/>
        <g fill="#1d4e57">
            <rect x="5"  y="10" width="5" height="5" rx="1"/>
            <rect x="5"  y="25" width="5" height="5" rx="1"/>
            <rect x="36" y="10" width="5" height="5" rx="1"/>
            <rect x="36" y="25" width="5" height="5" rx="1"/>
        </g>
        <path d="M15 12h16l-5 8 5 8H15l5-8-5-8z" fill="#3bb54a"/>
    </svg>
    <span class="logo__text">
        <span class="logo__name">KOMEK</span>
        <span class="logo__sub">BY&nbsp;TICKET</span>
    </span>
</a>
