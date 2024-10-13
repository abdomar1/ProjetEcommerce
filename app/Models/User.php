<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',      
        'prenom',    
        'email',     
        'password',  
        'adresse',   
        'telephone', 
        'idRole',   
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    // Relation avec le modèle Role
    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id');
        // Relation : La relation entre les modèles Utilisateur et Role est définie comme suit :

        // Utilisateur -> Role (belongsTo) : Cela signifie qu'un utilisateur appartient à un rôle.
        // Role -> Utilisateur (hasMany) : Cela signifie qu'un rôle peut avoir plusieurs utilisateurs associés.
                //
    }
    public function commandes()
    {
        return $this->hasMany(Commande::class, 'user_id'); 
        //indiquant qu'un utilisateur peut avoir plusieurs commandes.
    }

}
