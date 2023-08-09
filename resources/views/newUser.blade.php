@extends('layout')

@section('title', 'Créer votre compte')

@section('content')
    <h1>@yield('title')</h1>

    <form action="{{ route('user.store') }}" method="post">
        @csrf
        @method('post')
        <div class="row">
            <label for="name">Pseudo</label>
            <input type="text" id="name" name="name">
        </div>
        <div class="row">
            <label for="email">Votre email</label>
            <input type="text" id="email" name="email">
        </div>
        <div class="row">
            <label for="password">Votre mot de passe</label>
            <input type="password" id="password" name="password">
        </div>
        <button class="btn-primary" type="submit">Créer mon compte</button>
    </form>
@endsection
