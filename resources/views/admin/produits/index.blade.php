@extends('admin.dashboard')

@section('content')
<div class="container">
    <h1>Liste des Produits</h1>

    <a href="{{ route('produits.create') }}" class="btn btn-success mb-3">Ajouter Produit</a>

    @if ($produits->isEmpty())
        <div class="alert alert-info">Aucun produit trouvé.</div>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Prix</th>
                    <th>Catégorie</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                    <tr>
                        <td>
                            @if ($produit->img)
                                <img src="{{ asset('storage/' . $produit->img) }}" alt="{{ $produit->nom }}" style="width: 100px; height: auto;">
                            @else
                                <span>Aucune image</span>
                            @endif
                        </td>
                        <td>{{ $produit->nom }}</td>
                        <td>{{ $produit->description }}</td>
                        <td>{{ $produit->prix }} DH</td>
                        <td>{{ $produit->categorie ? $produit->categorie->nom : 'Non spécifié' }}</td>
                        <td>
                            <a href="{{ route('produits.show', $produit) }}" class="btn btn-info">Voir</a>
                            <a href="{{ route('produits.edit', $produit) }}" class="btn btn-warning">Modifier</a>
                            <form action="{{ route('produits.destroy', $produit) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce produit ?');">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
