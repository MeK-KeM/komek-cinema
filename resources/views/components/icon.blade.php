@props(['name', 'class' => ''])

@switch($name)
    @case('facebook')
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 9h3l.4-3H14V4.3c0-.9.3-1.5 1.5-1.5H17V.1C16.7.1 15.6 0 14.4 0 11.9 0 10 1.5 10 4.2V6H7v3h3v9h4V9z"/></svg>
        @break
    @case('instagram')
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.5" cy="6.5" r="1.2" fill="currentColor" stroke="none"/></svg>
        @break
    @case('youtube')
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M23 7.5a3 3 0 0 0-2.1-2.1C19 4.9 12 4.9 12 4.9s-7 0-8.9.5A3 3 0 0 0 1 7.5C.5 9.4.5 12 .5 12s0 2.6.5 4.5a3 3 0 0 0 2.1 2.1c1.9.5 8.9.5 8.9.5s7 0 8.9-.5a3 3 0 0 0 2.1-2.1c.5-1.9.5-4.5.5-4.5s0-2.6-.5-4.5zM9.7 15.4V8.6l5.8 3.4-5.8 3.4z"/></svg>
        @break
    @case('vk')
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M12.9 16.6c-5.3 0-8.6-3.7-8.7-9.8h2.7c.1 4.5 2.1 6.4 3.6 6.8V6.8h2.5v3.8c1.5-.2 3-1.8 3.6-3.8h2.5c-.4 2.4-2 4-3.1 4.7 1.1.5 2.9 2 3.6 4.1h-2.8c-.5-1.6-1.9-2.9-3.4-3.1v3.1h-.3z"/></svg>
        @break
    @case('chevron')
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"><path d="m6 9 6 6 6-6"/></svg>
        @break
    @case('image')
        <svg class="{{ $class }}" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="3"/><circle cx="8.5" cy="8.5" r="1.6"/><path d="m4 17 4.5-4.5 3.5 3.5 3-3L20 17"/></svg>
        @break
    @case('mastercard')
        <svg class="{{ $class }}" viewBox="0 0 48 30" fill="none" aria-hidden="true"><rect width="48" height="30" rx="4" fill="#fff"/><circle cx="19" cy="15" r="9" fill="#EB001B"/><circle cx="29" cy="15" r="9" fill="#F79E1B"/><path d="M24 8.2a9 9 0 0 0 0 13.6 9 9 0 0 0 0-13.6z" fill="#FF5F00"/></svg>
        @break
    @case('visa')
        <svg class="{{ $class }}" viewBox="0 0 48 30" fill="none" aria-hidden="true"><rect width="48" height="30" rx="4" fill="#fff"/><path d="M20.6 19.5h-2.4l1.5-9h2.4l-1.5 9zM30 10.7c-.5-.2-1.2-.4-2.1-.4-2.3 0-4 1.2-4 2.9 0 1.3 1.2 2 2 2.4.9.4 1.2.7 1.2 1.1 0 .6-.7.8-1.4.8-.9 0-1.4-.1-2.2-.5l-.3-.1-.3 1.9c.5.2 1.5.4 2.5.4 2.5 0 4.1-1.2 4.1-3 0-1-.6-1.8-2-2.4-.8-.4-1.3-.7-1.3-1.1 0-.4.4-.8 1.3-.8.7 0 1.3.2 1.7.3l.2.1.3-1.6zM33.7 16.3l1-2.6.5 2.6h-1.5zm2.6-5.8h-1.9c-.6 0-1 .2-1.3.8l-3.6 8.2h2.5l.5-1.4h3.1l.3 1.4h2.2l-1.9-9zM16.4 10.5l-2.4 6.1-.3-1.3c-.5-1.6-1.9-3.3-3.6-4.1l2.2 8.3h2.6l3.8-9h-2.3z" fill="#1A1F71"/></svg>
        @break
@endswitch
