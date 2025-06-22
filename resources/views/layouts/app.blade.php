<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" />
</head>
<body>
<nav class="bg-white border-b border-gray-200">
    <div class="max-w-7xl mx-auto px-4 flex justify-between items-center py-2">
        <a href="{{ url('/') }}" class="text-xl font-semibold">{{ config('app.name', 'Laravel') }}</a>
        <ul class="flex space-x-4">
            <li><a href="{{ route('products.index') }}" class="text-gray-700 hover:underline">Products</a></li>
            @auth
                @if(auth()->user()->isAdmin())
                    <li><a href="{{ route('users.index') }}" class="text-gray-700 hover:underline">Users</a></li>
                @endif
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="text-gray-700 hover:underline">Logout</button>
                    </form>
                </li>
            @else
                <li><a href="{{ route('login') }}" class="text-gray-700 hover:underline">Login</a></li>
                <li><a href="{{ route('register') }}" class="text-gray-700 hover:underline">Register</a></li>
            @endauth
        </ul>
    </div>
</nav>
<div class="max-w-7xl mx-auto py-6 px-4">
    @yield('content')
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.js"></script>
</body>
</html>
