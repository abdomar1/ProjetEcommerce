@extends('admin.dashboard')

@section('content')
<div class="container">
    <h1>Détails du Produit</h1>

    <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title">{{ $produit->nom }}</h5>
            <p class="card-text">{{ $produit->description }}</p>
            <p class="card-text"><strong>Prix :</strong> {{ $produit->prix }} DH</p>
            <p class="card-text"><strong>Catégorie :</strong> {{ $produit->categorie ? $produit->categorie->nom : 'Non spécifié' }}</p>
            <p class="card-text"><strong>Détails :</strong> {{ $produit->details }}</p>
            <p class="card-text"><strong>Principle :</strong> {{ $produit->principle }}</p>
            <p class="card-text"><strong>Marque :</strong> {{ $produit->marque }}</p>
            <p class="card-text"><strong>Couleur :</strong> {{ $produit->color }}</p>

            @if ($produit->img)
                <img src="{{ asset('storage/' . $produit->img) }}" alt="{{ $produit->nom }}" class="img-fluid mt-2">
            @else
                <p>Aucune image disponible.</p>
            @endif

            <a href="{{ route('produits.index') }}" class="btn btn-primary mt-3">Retour à la liste</a>
        </div>
    </div>
</div>
@endsection
