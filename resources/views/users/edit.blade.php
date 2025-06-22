@extends('layouts.app')

@section('content')
<h4 class="text-xl font-semibold mb-4">Edit User</h4>
<form method="POST" action="{{ route('users.update', $user) }}" class="space-y-4">
    @csrf
    @method('PUT')
    <div>
        <label for="name" class="block text-sm font-medium">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required class="mt-1 border-gray-300 rounded w-full">
    </div>
    <div>
        <label for="email" class="block text-sm font-medium">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required class="mt-1 border-gray-300 rounded w-full">
    </div>
    <div>
        <label for="role" class="block text-sm font-medium">Role</label>
        <select id="role" name="role" class="mt-1 border-gray-300 rounded w-full">
            <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
        </select>
    </div>
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
</form>
@endsection
