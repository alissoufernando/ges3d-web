<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Mail;
use App\Models\Alert;
use App\Models\Ville;
use App\Models\Produit;
use App\Models\cartItem;
use App\Models\Commande;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'prenoms',
        'phone',
        'ville',
        'ville_id',
        'email',
        'total_waste',
        'password',
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

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function cartItems()
    {
        return $this->hasMany(cartItem::class);
    }

    public function villeAssigner()
    {
        return $this->belongsTo(Ville::class, 'ville_id');
    }


    public function alerts()
    {
        return $this->belongsToMany(Alert::class);
    }

    public function produits()
    {
        return $this->belongsToMany(Produit::class);
    }

    public function senders()
    {
        return $this->belongsToMany(Mail::class, 'sender_id');
    }

    public function recivers()
    {
        return $this->belongsToMany(Mail::class, 'user_id');
    }


}
