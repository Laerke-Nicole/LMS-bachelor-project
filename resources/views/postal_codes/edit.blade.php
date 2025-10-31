@extends('layouts.app')

@section('content')

    <x-blocks.title href="{{ route('postal_codes.index') }}" title="Edit postal code"
                    buttonText="Go back"></x-blocks.title>

    <x-blocks.error-alert/>

    <x-blocks.form action="{{ route('postal_codes.update', $postalCode->id) }}" buttonText="Submit">
        @method('PUT')

        <x-elements.input label="Postal Code" name="postal_code" class="form-control" value="{{ $postalCode->postal_code }}"/>
        <x-elements.input label="City" name="city" class="form-control" value="{{ $postalCode->city }}"/>
        <x-elements.input label="Country" name="country" class="form-control" value="{{ $postalCode->country }}"/>

    </x-blocks.form>
    <button href="{{ route('postal_codes.index') }}" class="btn btn-outline-primary">Cancel</button>

@endsection
