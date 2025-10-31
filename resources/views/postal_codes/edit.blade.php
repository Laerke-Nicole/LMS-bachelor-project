@extends('components.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Postal Code</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('postal_codes.index') }}">Back</a>
            </div>
        </div>
    </div>

    <x-error-alert />

    <form action="{{ route('postal_codes.update', $postalCode->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Postal Code:</strong>
                    <input type="text" name="postal_code" value="{{ $postalCode->postal_code }}" class="form-control"
                           placeholder="Postal code">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>City:</strong>
                    <input type="text" name="city" value="{{ $postalCode->city }}" class="form-control"
                           placeholder="City">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Country:</strong>
                    <input type="text" name="country" value="{{ $postalCode->country }}" class="form-control"
                           placeholder="Country">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
