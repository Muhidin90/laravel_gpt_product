@extends('layouts.app')

@section('content')
<h4>Login</h4>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div class="input-field">
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
        <label for="email">Email</label>
    </div>
    <div class="input-field">
        <input id="password" type="password" name="password" required>
        <label for="password">Password</label>
    </div>
    <button type="submit" class="btn waves-effect waves-light">Login</button>
</form>
@endsection
