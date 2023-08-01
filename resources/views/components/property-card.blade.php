<div class="card">
    <a href="{{ route('property.show', ['property' => $property]) }}">
        <div class="property-img">
            <img src="{{ $property->picture }}" alt="maison" class="property-img">
        </div>
        <div class="card-top">
            <p>{{ $property->title }}</p>
            <p>{{ $property->price_per_night }} € par nuit</p>
        </div>
        <p class="card-bottom">{{ $property->city }}</p>
    </a>
</div>
