<a href="{{ route('property.show', $property) }}" class="card row">
    <div>
        <p>{{ $property->title }}</p>
        <p>{{ $property->address }}, {{ $property->city }}</p>
    </div>
    <p><strong>{{ $property->price_per_night }} €</strong></p>
    <a href="{{ route('property.edit', $property) }}">Éditer</a>
</a>
