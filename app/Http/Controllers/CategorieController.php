<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function afficheToutCate()
{
    // Récupérer toutes les catégories
    $categories = Categorie::all();

    // Retourner la vue avec les catégories
    return view('categorie', compact('categories'));
}
}
