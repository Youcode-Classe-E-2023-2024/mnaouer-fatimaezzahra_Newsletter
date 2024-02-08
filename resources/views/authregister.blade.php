<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Newsletter</title>
    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/5.0/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>

        body {
            overflow-x: hidden; /* Prevent scroll on narrow devices */
        }

        body {
            padding-top: 56px;
        }
        @media (max-width: 991.98px) {
            .offcanvas-collapse {
                position: fixed;
                top: 56px; /* Height of navbar */
                bottom: 0;
                left: 100%;
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem;
                overflow-y: auto;
                visibility: hidden;
                background-color: #343a40;
                transition: transform .3s ease-in-out, visibility .3s ease-in-out;
            }
            .offcanvas-collapse.open {
                visibility: visible;
                transform: translateX(-100%);
            }
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            color: rgba(255, 255, 255, .75);
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .nav-underline .nav-link {
            padding-top: .75rem;
            padding-bottom: .75rem;
            font-size: .875rem;
            color: #6c757d;
        }

        .nav-underline .nav-link:hover {
            color: #007bff;
        }

        .nav-underline .active {
            font-weight: 500;
            color: #343a40;
        }

        .text-white-50 { color: rgba(255, 255, 255, .5); }

        .bg-purple { background-color: #6f42c1; }

    </style>
    {{--    <link rel="stylesheet" href="{{ asset('css\app.css') }}">--}}
</head>

<form action="{{ route('register') }}" method="POST">
    @csrf
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
    <div class="form-floating">
        <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com" required>
        <label for="floatingInput">Email address</label>
        @error('email')
        <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <div class="form-floating">
        <input name="name" type="text" class="form-control" id="floatingUsername" placeholder="Username" required>
        <label for="floatingUsername">name</label>
    </div>

    <div class="form-floating">
        <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
        <label for="floatingPassword">Password</label>

        @error('password')
        <p class="text-red-600">{{ $message }}</p>
        @enderror
    </div>

    <label for="password_confirmation">Password Confirmation</label>
    <input type="password_confirmation" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}">

    <button name="register" href= "{{ route('register.show')}}" class="w-100 btn btn-lg btn-dark " type="submit">Sign up</button>
    <a href="index.php?page=login" class="w-100 btn btn-lg btn-secondary mt-2" type="button">Sign in</a>
    <a href="index.php?page=home" class="w-100 btn btn-lg btn-outline-dark mt-2" type="button">Back</a>
</form>
