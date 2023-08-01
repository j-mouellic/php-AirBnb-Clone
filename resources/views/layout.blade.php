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
    </nav>
    <div class="wrapper">
        @yield('content')
    </div>
</body>

</html>
