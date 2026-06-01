@props(['time', 'format' => '2D', 'price', 'hall'])

<div class="session">
    <button type="button" class="session__btn">
        <span class="session__time">{{ $time }}</span>
        <span class="session__meta">{{ $format }}&nbsp;&nbsp;{{ $price }} ₸</span>
    </button>
    <span class="session__hall">{{ $hall }}</span>
</div>
