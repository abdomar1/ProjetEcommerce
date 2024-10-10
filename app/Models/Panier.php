<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    public function produits()
    {
        return $this->belongsToMany(Produit::class, 'panier_produit')->withPivot('quantite');
    }
        // Relation pour indiquer que chaque panier peut avoir plusieurs produits 


  // gérer plusieurs quantités du même produit, vous pouvez ajouter des méthodes pour manipuler la quantité
  public function ajouterProduit(Produit $produit, $quantite = 1)
  {
      $this->produits()->attach($produit->id, ['quantite' => $quantite]);
  }

  public function retirerProduit(Produit $produit)
  {
      $this->produits()->detach($produit->id);
  }

  public function mettreAJourQuantite(Produit $produit, $quantite)
  {
      $this->produits()->updateExistingPivot($produit->id, ['quantite' => $quantite]);
  }
}
