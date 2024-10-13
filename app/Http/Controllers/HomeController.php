<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use App\Models\Commande;
use App\Models\CommandeDetail;
use App\Models\Utilisateur;
use App\Models\Role;
use App\Models\Panier;
use App\Models\Paiement;



use Illuminate\Http\Request;

class HomeController extends Controller
{
                public function afficheToutCate()
                {
                    // Récupérer toutes les catégories 
                    $categories = Categorie::all();
                    // Retourner la vue avec les catégories
                    return view('categorie', compact('categories'));
                }

                // Méthode pour afficher les 6 derniers produits
                public function afficherDerniers()
                {
                    // Récupérer les 6 derniers produits triés par la date de création descendante
                    $derniersProduits = Produit::inRandomOrder()->take(6)->get();
                    $derniersCategories = Categorie::inRandomOrder()->take(3)->get();

                    // Retourner la vue avec les produits et les catégories
                    return view('accueil', compact('derniersProduits', 'derniersCategories'));   
                }

                // Méthode pour afficher les 6 produit dans la page detail
                public function afProdDtail($id)
                {
                    $produit = Produit::findOrFail($id);
                    $derniersProduits = Produit::inRandomOrder()->take(6)->get();
                    return view('detail', compact('produit', 'derniersProduits'));
                }
                ////////////afficher prod et filtrer par cate
                public function afficheToutProd(Request $request)
                {   
                    $fCate = $request->query("categorie", []);
                    $fMarque = $request->query("marque", []);
                    $fCouleur = $request->query("couleur", []);

                    $produits = Produit::when($fCate, function ($query) use ($fCate) {
                        return $query->whereIn('category_id', $fCate);
                    })
                    ->when($fMarque, function ($query) use ($fMarque) {
                        return $query->whereIn('marque', $fMarque);
                    })
                    ->when($fCouleur, function ($query) use ($fCouleur) {
                        return $query->whereIn('color', $fCouleur);
                    })
                    ->paginate(3);

                    // Récupérer toutes les catégories, marques et couleurs
                    $categories = Categorie::all();
                    $marques = Produit::select('marque')->distinct()->get();
                    $couleurs = Produit::select('color')->distinct()->get();

                    return view('produit', compact('produits', 'categories', 'marques', 'couleurs', 'fCate', 'fMarque', 'fCouleur'));
                                
                }
                /////////details de produit
                public function show($id){
                    $produit = Produit::where('id',$id)->first();
                    return view('detail')->with('produit', $produit);

                }

                ////filtrer par categorie aparire de la page accueil
                // public function filterByCategory($id)
                // {
                //     $produits = Produit::where('category_id', $id)->get();
                    
                //     return view('produit', compact('produits'));
                // }

                ///////recherche categorie
             
                public function rechercherCategorie(Request $request)
                {
                    $categorieId = $request->query('categorie');

                    // Vérifier si la catégorie existe
                    $categorieTrouvee = Categorie::find($categorieId);
                    
                    // Récupérer toutes les catégories pour le dropdown
                    $categories = Categorie::all();
                
                    return view('categorie', compact('categorieTrouvee', 'categories'));
                }
                
       
}
