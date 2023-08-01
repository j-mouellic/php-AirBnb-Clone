@extends('layout')

@section('title', 'AirBnb Clone')

@section('content')
    <section class="property-index-grid">
        @foreach ($properties as $property)
            @include('components.property-card')
        @endforeach
    </section>
@endsection
