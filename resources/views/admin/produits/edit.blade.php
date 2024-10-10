@extends('admin.dashboard')

@section('content')
<div class="container">
    <h1>Modifier le Produit</h1>

    <form action="{{ route('produits.update', $produit) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" class="form-control" id="nom" name="nom" value="{{ old('nom', $produit->nom) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" required>{{ old('description', $produit->description) }}</textarea>
        </div>

        <div class="form-group">
            <label for="prix">Prix</label>
            <input type="number" class="form-control" id="prix" name="prix" value="{{ old('prix', $produit->prix) }}" required>
        </div>

        <div class="form-group">
            <label for="img">Image (laisser vide pour conserver l'image actuelle)</label>
            <input type="file" class="form-control" id="img" name="img">
            @if ($produit->img)
                <img src="{{ asset('storage/' . $produit->img) }}" alt="{{ $produit->nom }}" style="width: 100px; height: auto;" class="mt-2">
            @endif
        </div>

        <div class="form-group">
            <label for="details">Détails</label>
            <textarea class="form-control" id="details" name="details">{{ old('details', $produit->details) }}</textarea>
        </div>

        <div class="form-group">
            <label for="principle">Principle</label>
            <input type="text" class="form-control" id="principle" name="principle" value="{{ old('principle', $produit->principle) }}">
        </div>

        <div class="form-group">
            <label for="marque">Marque</label>
            <input type="text" class="form-control" id="marque" name="marque" value="{{ old('marque', $produit->marque) }}">
        </div>

        <div class="form-group">
            <label for="color">Couleur</label>
            <input type="text" class="form-control" id="color" name="color" value="{{ old('color', $produit->color) }}">
        </div>

        <div class="form-group">
            <label for="category_id">Catégorie</label>
            <select class="form-control" id="category_id" name="category_id" required>
                <option value="">Sélectionner une catégorie</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $produit->category_id ? 'selected' : '' }}>{{ $category->nom }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour Produit</button>
    </form>
</div>
@endsection
