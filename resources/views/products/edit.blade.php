@extends('layouts.app')

@section('content')
    <h4 class="text-xl font-semibold mb-4">Edit Product</h4>
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <label for="name" class="block text-sm font-medium">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name', $product->name) }}" required class="mt-1 border-gray-300 rounded w-full">
        </div>
        <div>
            <label for="description" class="block text-sm font-medium">Description</label>
            <textarea id="description" name="description" class="mt-1 border-gray-300 rounded w-full">{{ old('description', $product->description) }}</textarea>
        </div>
        <div>
            <label for="price" class="block text-sm font-medium">Price</label>
            <input id="price" type="number" step="0.01" name="price" value="{{ old('price', $product->price) }}" required class="mt-1 border-gray-300 rounded w-full">
        </div>
        <div>
            <label for="quantity" class="block text-sm font-medium">Quantity</label>
            <input id="quantity" type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}" required class="mt-1 border-gray-300 rounded w-full">
        </div>
        <div>
            <label for="image" class="block text-sm font-medium">Image</label>
            <input id="image" type="file" name="image" class="mt-1">
            @if($product->image_path)
                <img src="{{ asset('storage/'.$product->image_path) }}" class="h-16 w-16 object-cover mt-2" alt="{{ $product->name }}">
            @endif
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Update</button>
    </form>
@endsection
