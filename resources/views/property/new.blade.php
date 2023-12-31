@extends('layout')

@section('title', $property->exists ? 'Éditer un bien' : 'Créer un bien')

@section('content')
    <h1>@yield('title')</h1>

    <a href="{{ route('user.dashboard') }}">dashboard</a>

    <form action="{{ route($property->exists ? 'property.update' : 'property.store', $property) }}" method="post">
        @csrf
        @method($property->exists ? 'patch' : 'post')
        @include('components.input', [
            'label' => 'Titre',
            'db_name' => 'title',
            'value' => $property->title,
        ])
        @include('components.input', [
            'label' => 'Type de bien',
            'db_name' => 'home_type',
            'value' => $property->home_type,
        ])
        @include('components.input', [
            'type' => 'textarea',
            'label' => 'Description',
            'db_name' => 'description',
            'value' => $property->description,
        ])
        <div class="input-row">
            @include('components.input', [
                'label' => 'Nombre de chambres',
                'db_name' => 'bedrooms',
                'value' => $property->bedrooms,
            ])
            @include('components.input', [
                'label' => 'Nombre de salle de bains',
                'db_name' => 'bathrooms',
                'value' => $property->bathrooms,
            ])
            @include('components.input', [
                'label' => 'Surface',
                'db_name' => 'surface',
                'value' => $property->surface,
            ])
            @include('components.input', [
                'label' => 'Prix par nuit',
                'db_name' => 'price_per_night',
                'value' => $property->price_per_night,
            ])
        </div>

        <div class="input-row">
            @include('components.input', [
                'label' => 'adresse',
                'db_name' => 'address',
                'value' => $property->address,
            ])
            @include('components.input', [
                'label' => 'Ville',
                'db_name' => 'city',
                'value' => $property->city,
            ])
            @include('components.input', [
                'label' => 'Code Postal',
                'db_name' => 'postal_code',
                'value' => $property->postal_code,
            ])
        </div>
        <button type="submit">
            @if ($property->exists)
                Modifier
            @else
                Créer
            @endif
        </button>
    </form>
@endsection
