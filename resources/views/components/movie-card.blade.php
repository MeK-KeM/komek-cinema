@props(['movie'])

<article class="movie">
    <div class="movie__poster">
        @if (!empty($movie['poster']))
            <img src="{{ $movie['poster'] }}" alt="{{ $movie['title'] }}" loading="lazy">
        @else
            <div class="movie__noimg"><x-icon name="image" /></div>
        @endif

        @if (!empty($movie['badge']))
            <span class="movie__badge">{{ $movie['badge'] }}</span>
        @endif

        @if (!empty($movie['age']))
            <span class="movie__age">{{ $movie['age'] }}</span>
        @endif
    </div>

    <h3 class="movie__title">{{ $movie['title'] }}</h3>

    @if (!empty($movie['genres']))
        <div class="movie__genres">
            @foreach ($movie['genres'] as $genre)
                <span class="genre">{{ $genre }}</span>
            @endforeach
        </div>
    @endif

    @if (!empty($movie['sessions']))
        <div class="movie__sessions">
            @foreach ($movie['sessions'] as $s)
                <x-session :time="$s['time']" :format="$s['format'] ?? '2D'" :price="$s['price']" :hall="$s['hall']" />
            @endforeach
        </div>
    @elseif (!empty($movie['cta']))
        <button type="button" class="btn movie__more">{{ $movie['cta'] }}</button>
    @endif
</article>
