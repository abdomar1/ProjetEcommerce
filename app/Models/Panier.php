<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    public function produits()
    {
        return $this->hasMany(Produit::class, 'idProd', 'id'); 
    }
        // Relation pour indiquer que chaque panier peut avoir plusieurs produits 


  // gérer plusieurs quantités du même produit, vous pouvez ajouter des méthodes pour manipuler la quantité
  public function ajouterQuantite($quantite)
  {
      $this->qtePan += $quantite;
      $this->save();
  }

  public function retirerQuantite($quantite)
  {
      $this->qtePan -= $quantite;
      $this->save();
  }
}
