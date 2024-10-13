<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paiement extends Model
{
    use HasFactory;

    protected $fillable = [
        'idCmd',      
        'montant',    
        'modePaim',   
        'datePaim',   
    ];

    public function commande()
    {
        return $this->belongsTo(Commande::class, 'commande_id'); // Un paiement est lié à une commande
    }
}
