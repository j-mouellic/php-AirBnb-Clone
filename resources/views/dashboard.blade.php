@extends('layout')

@section('title', 'Dashboard')


@section('content')

    <section class="row">
        <div class="col">
            <h2>Votre Compte</h2>
            <p>{{ $user->name }}</p>
            <p>{{ $user->email }}</p>
        </div>
        <div class="col">
            <h2>Vos réservations</h2>
            @foreach ($bookings as $booking)
                @include('components.dashboard-booking-card')
            @endforeach
        </div>
        <div class="col">
            <h2>Vos biens</h2>
            <a href="{{ route('property.create') }}" class="btn-primary">Ajouter un bien</a>
            @foreach ($properties as $property)
                @include('components.dashboard-property-card')
            @endforeach
        </div>
    </section>

@endsection
