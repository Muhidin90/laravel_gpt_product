@extends('layouts.app')

@section('content')
    <h4>Add Product</h4>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <div class="input-field">
            <input id="name" type="text" name="name" value="{{ old('name') }}" required>
            <label for="name">Name</label>
        </div>
        <div class="input-field">
            <textarea id="description" class="materialize-textarea" name="description">{{ old('description') }}</textarea>
            <label for="description">Description</label>
        </div>
        <div class="input-field">
            <input id="price" type="number" step="0.01" name="price" value="{{ old('price') }}" required>
            <label for="price">Price</label>
        </div>
        <div class="input-field">
            <input id="quantity" type="number" name="quantity" value="{{ old('quantity') }}" required>
            <label for="quantity">Quantity</label>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Save</button>
    </form>
@endsection
