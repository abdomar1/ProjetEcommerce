@extends('admin.dashboard')
@section('content')

<div class="container">
    <h1>Edit Category</h1>

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('categories.update', $category->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nom" class="form-label">Name</label>
            <input type="text" name="nom" id="nom" class="form-control" value="{{ old('nom', $category->nom) }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea name="description" id="description" class="form-control">{{ old('description', $category->description) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">New Image</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
        </div>

        @if ($category->image)
            <div class="mb-3">
                <label class="form-label">Current Image</label><br>
                <img src="{{ asset('storage/' . $category->image) }}" alt="Current Image" class="img-fluid" style="max-width: 200px;">
            </div>
            <div class="mb-3">
                <label for="remove_image" class="form-label">Remove Current Image</label>
                <input type="checkbox" name="remove_image" id="remove_image" value="1">
            </div>
        @endif

        <button type="submit" class="btn btn-primary">Update Category</button>
        <a href="{{ route('categories.index') }}" class="btn btn-secondary">Cancel</a>
    </form>
</div>

@endsection
