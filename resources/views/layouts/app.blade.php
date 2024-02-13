<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        .footer {
            background-color: #333;
            margin-top: 3rem;
            padding: 1rem 0;
            width: 100%;
        }

        .footer-text {
            color: #fff;
            font-size: 1.2rem;
            text-align: center;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand">NewsLetter</a>
        <form class="">
            <ul class="navbar-nav ml-auto">
                <div class="row">
                    <li class="col-md-3 nav-item active">
                        <a class="nav-link" href="{{ __('home') }}">Home</a>
                    </li>
                    <li class="col-md-3 nav-item">
                        <a class="nav-link" href="{{ __('mediaForm') }}">Media</a>
                    </li>

                    <li class="col-md-3 nav-item">
                    <a class="nav-link" href="{{ __('table') }}">Liste Media</a>

                    </li>
                    <li class="col-md-3 nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ __('logout') }}" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Menu
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Logout</a>
                        </div>
                    </li>
                </div>
            </ul>

        </form>
    </div>
</nav>

@guest
    @if (Route::has('login'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
        </li>
    @endif

    @if (Route::has('register'))
        <li class="nav-item">
            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
        </li>
        @endif
        @else

        @endguest

        <main class="py-4">
            @yield('content')
        </main>
        </div>
<footer class="footer">
    <p class="footer-text">&copy; 2024 NEWSLETTER</p>
</footer>
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>
