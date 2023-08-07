<a href="{{ route('property.show', $booking->property) }}" class="card row">
    <div>
        <p>{{ $booking->property->home_type }}</p>
        <p>{{ $booking->property->address }}, {{ $booking->property->city }}</p>
    </div>
    <p><strong>{{ $booking->total_price }} €</strong></p>
</a>
