<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
<<<<<<< HEAD
        'nom',         
        'description',  
=======
        'nomP',          
        'descriptionP',  
>>>>>>> 65d783c5ba694ba4b5d58071c0b716a2c7fc52a4
        'prix',          
        'img',           
        'details',    
        'principle', 
        'marque',       
        'color',        
        'category_id',        
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'category_id');
    }
    public function paniers()
    {
        return $this->belongsToMany(Panier::class, 'panier_produit')->withPivot('quantite'); // Un produit peut être dans plusieurs paniers
    }
    
     public function commandeDetails()
     {
         return $this->hasMany(CommandeDetail::class, 'idProd');
     }
    

}
