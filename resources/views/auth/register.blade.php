@extends('layouts.app')

@section('content')
<h4 class="text-xl font-semibold mb-4">Register</h4>
<form method="POST" action="{{ route('register') }}" class="space-y-4">
    @csrf
    <div>
        <label for="name" class="block text-sm font-medium">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="mt-1 border-gray-300 rounded w-full">
    </div>
    <div>
        <label for="email" class="block text-sm font-medium">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required class="mt-1 border-gray-300 rounded w-full">
    </div>
    <div>
        <label for="password" class="block text-sm font-medium">Password</label>
        <input id="password" type="password" name="password" required class="mt-1 border-gray-300 rounded w-full">
    </div>
    <div>
        <label for="password_confirmation" class="block text-sm font-medium">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required class="mt-1 border-gray-300 rounded w-full">
    </div>
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Register</button>
</form>
@endsection
