@php
    $type ??= 'text';
    $label ??= 'ajouter un label';
    $value ??= '';
    $db_name ??= '';
@endphp

<div class="form-input">
    <label for="{{ $db_name }}">{{ $label }}</label>
    @if ($type === 'text')
        <input type="text" id="{{ $db_name }}" name="{{ $db_name }}">
    @else
        <textarea name="{{ $db_name }}" id="{{ $db_name }}" value="{{ $value }}" cols="30" rows="10"></textarea>
    @endif

    @error($db_name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
