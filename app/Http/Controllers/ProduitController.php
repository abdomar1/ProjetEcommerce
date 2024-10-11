<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use App\Models\Categorie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProduitController extends Controller
{

    public function index()
    {
        $produits = Produit::all();
        return view('admin.produits.index', compact('produits'));
    }



    public function create()
    {
        $categories = Categorie::all();
        return view('admin.produits.create', compact('categories'));
    }





    
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'nullable|string',
            'principle' => 'nullable|string',
            'marque' => 'nullable|string',
            'color' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);
        $imagePath = null;
    
        // Handle image upload
        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $imagePath = $image->store('images/produits', 'public'); // Store the image in the 'public/images/categories' directory
        }

    
        // Create the product
        Produit::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'img' => $imagePath,
            'details' => $request->details,
            'principle' => $request->principle,
            'marque' => $request->marque,
            'color' => $request->color,
            'category_id' => $request->category_id,
        ]);
    
        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès.');
    }
    
    

// Afficher un produit spécifique
public function show(Produit $produit)
{
    return view('admin.produits.show', compact('produit'));
}



    public function edit(Produit $produit)
    {
        $categories = Categorie::all();
        return view('admin.produits.edit', compact('produit', 'categories'));
    }
    


    public function update(Request $request, Produit $produit)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'details' => 'nullable|string',
            'principle' => 'nullable|string',
            'marque' => 'nullable|string',
            'color' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
        ]);
    
        // Gestion de l'upload de la nouvelle image
        $imagePath = $produit->img; // Garder le chemin de l'image actuelle
        if ($request->hasFile('img')) {
            // Supprimer l'ancienne image
            if ($imagePath) {
                Storage::disk('public')->delete($imagePath);
            }
            
            // Stocker la nouvelle image
            $image = $request->file('img');
            $imagePath = $image->store('images/produits', 'public');
        }
    
        // Mettre à jour le produit
        $produit->update([
            'nom' => $request->nom,
            'description' => $request->description,
            'prix' => $request->prix,
            'img' => $imagePath,
            'details' => $request->details,
            'principle' => $request->principle,
            'marque' => $request->marque,
            'color' => $request->color,
            'category_id' => $request->category_id,
        ]);
    
        return redirect()->route('produits.index')->with('success', 'Produit mis à jour avec succès.');
    }
    

    // Supprimer un produit
    public function destroy(Produit $produit)
    {
        $produit->delete();
        return redirect()->route('produits.index')->with('success', 'Produit supprimé avec succès.');
    }
}
