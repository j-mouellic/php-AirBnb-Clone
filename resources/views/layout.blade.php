<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>@yield('title')</title>
</head>

<body>
    <nav class="navbar">
        <section class="nav-zone">
            <h1>AirBnb Clone</h1>
        </section>
        @guest
            <a href="{{ route('loginForm') }}" class="btn-primary">Se connecter</a>
        @endguest
        @auth
            <form action="{{ route('logout') }}" method="post">
                @csrf
                @method('delete')
                <button>Se déconnecter</button>
            </form>
        @endauth
    </nav>
    <div class="container">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif

        @yield('content')
    </div>
</body>

</html>
