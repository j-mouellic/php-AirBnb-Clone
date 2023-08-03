@extends('layout')

@section('title', 'Nouveau Bien')

@section('content')
    <h1>Enregistrer un nouveau bien</h1>

    <form action="{{ route('property.store') }}" method="post">
        @csrf
        <div>
            <label for="title">Titre</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
    </form>
@endsection
