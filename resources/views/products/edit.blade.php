@extends('layouts.app')

@section('content')
    <h4>Edit Product</h4>
    <form action="{{ route('products.update', $product) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="input-field">
            <input id="name" type="text" name="name" value="{{ old('name', $product->name) }}" required>
            <label for="name" class="active">Name</label>
        </div>
        <div class="input-field">
            <textarea id="description" class="materialize-textarea" name="description">{{ old('description', $product->description) }}</textarea>
            <label for="description" class="active">Description</label>
        </div>
        <div class="input-field">
            <input id="price" type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required>
            <label for="price" class="active">Price</label>
        </div>
        <div class="input-field">
            <input id="quantity" type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}" required>
            <label for="quantity" class="active">Quantity</label>
        </div>
        <button type="submit" class="btn waves-effect waves-light">Update</button>
    </form>
@endsection
