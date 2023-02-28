<?php

namespace App\Models;

use App\Models\cartItem;
use App\Models\Commande;
use App\Models\OrderItem;
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

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function cartItems()
    {
        return $this->hasMany(cartItem::class);
    }
}
