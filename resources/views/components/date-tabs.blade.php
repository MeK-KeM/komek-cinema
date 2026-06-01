@props(['tabs' => []])

<div class="datebar">
    <div class="container datebar__inner">
        @foreach ($tabs as $label)
            <button type="button" class="tab @if($loop->first) is-active @endif" data-tab>{{ $label }}</button>
        @endforeach
    </div>
</div>
