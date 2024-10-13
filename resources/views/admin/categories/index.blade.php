@extends('admin.dashboard')
@section('content')

<div class="container">
    <h1>Categories</h1>

    @if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if (session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-3">Add New Category</a>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->nom }}</td>
                    <td>{{ $category->description }}</td>
                    <td class="text-center">
                        @if ($category->image)
                        <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->nom }}" class="img-thumbnail" width="100px">
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="text-center">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table> 

@endsection
