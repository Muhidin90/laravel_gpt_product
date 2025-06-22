@extends('layouts.app')

@section('content')
<h4 class="text-xl font-semibold mb-4">Users</h4>
<div class="overflow-x-auto">
<table class="min-w-full bg-white">
    <thead class="bg-gray-100">
        <tr>
            <th class="px-4 py-2">Name</th>
            <th class="px-4 py-2">Email</th>
            <th class="px-4 py-2">Role</th>
            <th class="px-4 py-2"></th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $user)
        <tr class="border-b">
            <td class="px-4 py-2">{{ $user->name }}</td>
            <td class="px-4 py-2">{{ $user->email }}</td>
            <td class="px-4 py-2">{{ $user->role }}</td>
            <td class="px-4 py-2">
                <a href="{{ route('users.edit', $user) }}" class="text-blue-600 hover:underline">Edit</a>
                <form action="{{ route('users.destroy', $user) }}" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:underline ml-2">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection
