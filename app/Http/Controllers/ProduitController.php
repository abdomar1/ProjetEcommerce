<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;

use Illuminate\Http\Request;

class ProduitController extends Controller
{
    
         // Méthode pour afficher les 6 derniers produits
    public function afficherDerniers()
    {
         // Récupérer les 6 derniers produits triés par la date de création descendante
    $derniersProduits = Produit::inRandomOrder()->take(6)->get();
    $derniersCategories = Categorie::inRandomOrder()->take(3)->get();

  // Retourner la vue avec les produits et les catégories
  return view('accueil', compact('derniersProduits', 'derniersCategories'));    
    }




    public function afficheToutProd()
    {
        // Récupérer toutes les catégories
        $produits = Produit::all();
        $categories = Categorie::distinct()->get();

        // Retourner la vue avec les catégories
        return view('produit', compact('produits','categories'));
    }














    public function filtrer(Request $request)
    {
        // Récupérer les filtres sélectionnés
        $categorie_id = $request->input('categorie');
        $marque = $request->input('marque');
        $couleur = $request->input('couleur');
    
        // Construire la requête avec les filtres
        $query = Produit::query();
    
        if ($categorie_id) {
            $query->where('id', $categorie_id); // Filtre par catégorie
        }
    
        if ($marque) {
            $query->whereIn('marque', (array) $marque); // Filtre par marque
        }
    
        if ($couleur) {
            $query->whereIn('coleur', (array) $couleur); // Filtre par couleur
        }
    
        // Exécuter la requête et obtenir les produits filtrés
        $produits = $query->get();
        $categories = Categorie::distinct()->get();
    
        // Retourner la vue avec les produits filtrés et les catégories
        return view('produit', compact('produits', 'categories'));
    }
    


    
}
