<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomC',          
        'descriptionC',
    ];

    public function produits()
    {
        return $this->hasMany(Produit::class, 'idCate'); 
    }

}
