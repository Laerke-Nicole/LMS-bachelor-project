@extends('components.layouts.layout')

@section('content')

    <x-blocks.title href="{{ route('postal_codes.index') }}" title="Add new postal code" buttonText="Go back"></x-blocks.title>

    <x-blocks.error-alert/>

    <x-blocks.form action="{{ route('postal_codes.store') }}" buttonText="Submit">
        <x-elements.input label="Postal Code" name="postal_code"/>
        <x-elements.input label="City" name="city"/>
        <x-elements.input label="Country" name="country"/>
    </x-blocks.form>

@endsection
