@extends('admin.dashboard')

@section('content')
<div class="container">
    <h1>إضافة فئة جديدة</h1>

    @if ($errors->any())
        <div class="alert alert-danger"> 
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('categories.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nom">nom categorie</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">description</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="image">image</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
        </div>
        

        <button type="submit" class="btn btn-primary">Ajoute</button>
    </form>
</div>
@endsection
