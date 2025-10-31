@extends('layouts.app')

@section('content')

    <x-blocks.title href="{{ route('postal_codes.index') }}" title="Edit postal code"
                    buttonText="Go back"></x-blocks.title>

    <x-blocks.error-alert/>

    <x-blocks.form action="{{ route('postal_codes.update', $postalCode->id) }}" buttonText="Submit">
        @method('PUT')

        <x-elements.input col="col-12 col-lg-4" label="Postal Code" name="postal_code" value="{{ $postalCode->postal_code }}"/>
        <x-elements.input col="col-12 col-lg-4" label="City" name="city" value="{{ $postalCode->city }}"/>
        <x-elements.input col="col-12 col-lg-4" label="Country" name="country" value="{{ $postalCode->country }}"/>

    </x-blocks.form>
    <button href="{{ route('postal_codes.index') }}" class="btn btn-outline-primary">Cancel</button>

@endsection
