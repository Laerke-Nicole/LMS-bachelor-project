{{--highlight is by default false--}}
@props(['highlight' => false])

{{--it always has a card class now and if highlight prop value is true then it gets highlight--}}
<div @class(['highlight' => $highlight, 'card'])>
    {{ $slot }}
    <a href="{{ $attributes->get('href') }}" class="btn">View details</a>
</div>
