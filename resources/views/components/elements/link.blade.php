<a class="{{ $class ?? null }}" href="{{ $attributes->get('href') }}">
    @isset($icon)
        <i class="{{ $icon }}"></i>
    @endisset
        {{ $title }}
</a>
