@extends('components.layout')


@section('content')

    @foreach($postalCodes as $postalCode)
{{--        if a postal code is larger than 70 then the highlight class gets passed in--}}
        <x-card href="/postal_codes/{{ $postalCode['id'] }}" :highlight="$postalCode['postal_code'] > 70">
            {{ $postalCode['city']  }}
        </x-card>
    @endforeach

@endsection
