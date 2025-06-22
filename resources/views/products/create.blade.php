@extends('layouts.app')

@section('content')
    <h4 class="text-xl font-semibold mb-4">Add Product</h4>
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') }}" required class="mt-1 border-gray-300 rounded w-full">
        </div>
        <div>
            <label for="description" class="block text-sm font-medium">Description</label>
            <textarea id="description" name="description" class="mt-1 border-gray-300 rounded w-full">{{ old('description') }}</textarea>
        </div>
        <div>
            <label for="price" class="block text-sm font-medium">Price</label>
            <input id="price" type="number" step="0.01" name="price" value="{{ old('price') }}" required class="mt-1 border-gray-300 rounded w-full">
        </div>
        <div>
            <label for="quantity" class="block text-sm font-medium">Quantity</label>
            <input id="quantity" type="number" name="quantity" value="{{ old('quantity') }}" required class="mt-1 border-gray-300 rounded w-full">
        </div>
        <div>
            <label for="image" class="block text-sm font-medium">Image</label>
            <input id="image" type="file" name="image" class="mt-1">
        </div>
        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Save</button>
    </form>
@endsection
