<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Materialize CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
</head>
<body>
<nav>
    <div class="nav-wrapper container">
        <a href="{{ url('/') }}" class="brand-logo">{{ config('app.name', 'Laravel') }}</a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ route('products.index') }}">Products</a></li>
            @auth
                @if(auth()->user()->isAdmin())
                    <li><a href="{{ route('users.index') }}">Users</a></li>
                @endif
                <li>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline">
                        @csrf
                        <button type="submit" class="btn-flat">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}">Login</a></li>
                <li><a href="{{ route('register') }}">Register</a></li>
            @endauth
        </ul>
    </div>
</nav>
<div class="container" style="margin-top: 20px;">
    @yield('content')
</div>
<!-- Materialize JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>
