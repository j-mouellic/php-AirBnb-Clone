<a href="{{ route('property.show', $property) }}" class="card row">
    <div>
        <p>{{ $property->title }}</p>
        <p>{{ $property->address }}, {{ $property->city }}</p>
    </div>
    <p><strong>{{ $property->price_per_night }} €</strong></p>
    <a href="{{ route('property.edit', $property) }}" class="btn-primary">Éditer</a>
    <form action="{{ route('property.destroy', $property) }}" method="post">
        @csrf
        @method('delete')
        <button class="btn-danger">Supprimer</button>
    </form>
</a>
