@extends('admin.dashboard')

@section('content')
<div class="container">
    <h1>Ajouter un Produit</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form action="{{ route('produits.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required></textarea>
        </div>

        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" required>
        </div>

        <div class="form-group">
            <label for="img">Image</label>
            <input type="file" class="form-control" id="img" name="img">
        </div>

        <div class="form-group">
            <label for="details">Détails</label>
            <textarea class="form-control" id="details" name="details"></textarea>
        </div>

        <div class="form-group">
            <label for="principle">Principle</label>
            <input type="text" class="form-control" id="principle" name="principle">
        </div>

        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" id="marque" name="marque">
        </div>

        <div class="form-group">
            <label for="color">Couleur</label>
            <input type="text" class="form-control" id="color" name="color">
        </div>

        <div class="form-group">
            <label for="category_id">Catégorie</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Sélectionner une catégorie</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Ajouter Produit</button>
    </form>
</div>
@endsection
