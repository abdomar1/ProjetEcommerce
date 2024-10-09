<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;


    protected $fillable = [
        'nomU',      
        'prenom',    
        'email',     
        'password',  
        'adresse',   
        'telephone', 
        'idRole',   
    ];

    // Relation avec le modèle Role
    public function role()
    {
        return $this->belongsTo(Role::class, 'idRole');
        // Relation : La relation entre les modèles Utilisateur et Role est définie comme suit :

        // Utilisateur -> Role (belongsTo) : Cela signifie qu'un utilisateur appartient à un rôle.
        // Role -> Utilisateur (hasMany) : Cela signifie qu'un rôle peut avoir plusieurs utilisateurs associés.
                //
    }
    public function commandes()
    {
        return $this->hasMany(Commande::class, 'idUtil'); 
        //indiquant qu'un utilisateur peut avoir plusieurs commandes.
    }

}

