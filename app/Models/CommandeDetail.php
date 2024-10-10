<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommandeDetail extends Model
{
    use HasFactory;

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
