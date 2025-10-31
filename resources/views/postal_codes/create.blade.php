@extends('components.layout')

@section('content')


    <x-title href="{{ route('postal_codes.index') }}" title="Add new Postal Code" buttonText="Back"></x-title>

    <x-error-alert />

    <x-form action="{{ route('postal_codes.store') }}" buttonText="Submit">
        <x-input label="Postal Code" name="postal_code" />
        <x-input label="City" name="city" />
        <x-input label="Country" name="country" />
    </x-form>


@endsection
