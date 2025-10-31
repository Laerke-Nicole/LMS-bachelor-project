@extends('components.layouts.layout')

@section('content')

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Postal Code</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('postal_codes.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Postal code:</strong>
                {{ $postalCode->postal_code }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>City:</strong>
                {{ $postalCode->city }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Country:</strong>
                {{ $postalCode->country }}
            </div>
        </div>
    </div>

@endsection
