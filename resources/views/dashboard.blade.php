@extends('layout')

@section('title', 'Dashboard')


@section('content')

    <h1>Dashboard</h1>

    <ul>
        @foreach ($bookings as $booking)
            <li>{{ $booking->total_price }} €</li>
        @endforeach
    </ul>

@endsection
