<?php

namespace App\Models;

use App\Models\Produit;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cartItem extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'produit_id',
        'quantite',
        'isDelete'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function produit()
    {
        return $this->belongsTo(Produit::class);
    }



}
