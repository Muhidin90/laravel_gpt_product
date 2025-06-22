@extends('layouts.app')

@section('content')
<h4>Edit User</h4>
<form method="POST" action="{{ route('users.update', $user) }}">
    @csrf
    @method('PUT')
    <div class="input-field">
        <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required>
        <label for="name">Name</label>
    </div>
    <div class="input-field">
        <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required>
        <label for="email">Email</label>
    </div>
    <div class="input-field">
        <select id="role" name="role">
            <option value="user" {{ $user->role === 'user' ? 'selected' : '' }}>User</option>
            <option value="admin" {{ $user->role === 'admin' ? 'selected' : '' }}>Admin</option>
        </select>
        <label for="role">Role</label>
    </div>
    <button type="submit" class="btn waves-effect waves-light">Update</button>
</form>
@endsection
