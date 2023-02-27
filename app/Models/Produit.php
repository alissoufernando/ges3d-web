<?php

namespace App\Models;

use App\Models\Commande;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produit extends Model
{
    use HasFactory;
    protected $fillable = [
        'nom',
        'prix',
        'promo_prix',
        'path',
        'coute_decription',
        'description',
        'user_id',
    ];

    public function commandes()
    {
        return $this->belongsToMany(Commande::class);
    }
}
