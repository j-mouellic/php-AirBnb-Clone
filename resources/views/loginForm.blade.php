@extends('layout')

@section('title', 'Connexion')

@section('content')

    <h1>@yield('title')</h1>

    <form action="{{ route('login') }}" method="post">
        @csrf
        @method('post')
        <div class="row">
            <label for="email">Email :</label>
            <input type="email" id="email" name="email">
        </div>
        <div class="row">
            <label for="password">Mot de passe :</label>
            <input type="password" id="password" name="password">
        </div>
        <input type="submit" value="Connexion" class="btn-primary">
    </form>
@endsection
