<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeDetail extends Model
{
    use HasFactory;

<<<<<<< HEAD
    public function commande()
    {
        return $this->belongsTo(Commande::class, 'commande_id');
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'produit_id');
    }
    
}
=======
     protected $fillable = [
        'idCmd',       
        'idProd',     
        'quantite',   
        'prixUnit',   
    ];


     public function commande()
     {
         return $this->belongsTo(Commande::class, 'idCmd'); //details appartient à une commande
     }
 
     // Relation avec la table Produit
     public function produit()
     {
         return $this->belongsTo(Produit::class, 'idProd');
     }
} 
>>>>>>> 65d783c5ba694ba4b5d58071c0b716a2c7fc52a4
