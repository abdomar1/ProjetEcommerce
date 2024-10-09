<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomP',         
        'descriptionP',  
        'prix',          
        'img',           
        'descTechno',    
        'principCaracte', 
        'marque',       
        'coleur',        
        'idCate',        
    ];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class, 'idCate');
    }
    public function paniers()
    {
        return $this->hasMany(Panier::class, 'idProd'); // Un produit peut être dans plusieurs paniers
    }
    

}
