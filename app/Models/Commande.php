<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

    protected $fillable = [
        'idUtil',    
        'total',     
        'status',    
    ];
    public function utilisateur()
    {
        return $this->belongsTo(User::class, 'user_id');
        //indiquant qu'un utilisateur passee à un commande. 
    }
    public function paiements()
    {
        return $this->hasMany(Paiement::class, 'commande_id '); // Une commande peut avoir plusieurs paiements
    }

    public function commandeDetails()
    {
        return $this->hasMany(CommandeDetail::class, 'commande_id');
    }
    
}
