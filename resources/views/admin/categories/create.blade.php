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
            <label for="nom">اسم الفئة</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="description">وصف الفئة (اختياري)</label>
            <textarea name="description" id="description" class="form-control"></textarea>
        </div>

        <div class="form-group">
            <label for="image">صورة الفئة (اختياري)</label>
            <input type="file" name="image" id="image" class="form-control" accept="image/*">
        </div>
        

        <button type="submit" class="btn btn-primary">إضافة فئة</button>
    </form>
</div>
@endsection
