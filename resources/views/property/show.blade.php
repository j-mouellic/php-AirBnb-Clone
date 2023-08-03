@extends('layout')

@section('title', $property->title)

@section('content')
    <section class="propertyshow__card">
        <h1>{{ $property->title }}</h1>
        <div class="row">
            <div class="propertyshow__img">
                <img src="{{ $property->picture }}" alt="">
            </div>
            <section class="propertyshow__infos">
                <div class="row">
                    <h2>{{ $property->home_type }}</h2>
                    <h2>{{ $property->price_per_night }} € par nuit</h2>
                </div>
                <p>{{ $property->description }}</p>
                <div class="propertyshow__icons row">
                    <h3>{{ $property->bedrooms }}</h3>
                    <h3>{{ $property->bathrooms }}</h3>
                    <h3>{{ $property->surface }} m²</h3>
                </div>
                <div class="propertyshow__adress">
                    <p>{{ $property->address }} <br> {{ $property->city }}</p>
                </div>
            </section>
        </div>
    </section>
    <a href="{{ route('property.index') }}">Retour à la liste</a>
@endsection
