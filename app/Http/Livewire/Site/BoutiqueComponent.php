<?php

namespace App\Http\Livewire\Site;

use App\Models\Produit;
use Livewire\Component;
use App\Models\cartItem;
use Livewire\WithPagination;
use App\Models\ProduitPanier;
use Illuminate\Support\Facades\Auth;

class BoutiqueComponent extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;


    // Ajouter un produit au panier
    public function addToCart($id)
    {
        if(!Auth::check())
        {
            return redirect()->route('login');
        }else{
            // Récupérer l'utilisateur connecté
            $user = Auth::user();
            $produit_id = $id;

            // Récupérer le produit
            $produit = Produit::findOrFail($produit_id);
            
            // Vérifier si le produit est déjà dans le panier de l'utilisateur
            $cartItem = cartItem::where('user_id', $user->id)
                ->where('produit_id', $produit->id)
                ->first();

            if ($cartItem) {
                // Mettre à jour la quantité
                $cartItem->quantite += 1;
                $cartItem->save();
            } else {
                // Ajouter un nouvel élément au panier
                $cartItem = new cartItem;
                $cartItem->user_id = $user->id;
                $cartItem->produit_id = $produit_id;
                $cartItem->quantite = 1;
                $cartItem->save();
            }

            session()->flash('message', 'Un produit à été ajouter au panier.');
            back();
        }
    }

    public function render()
    {
        $produits = Produit::where('isDelete', 0)->orderBy('created_at','DESC')->paginate(6);

        return view('livewire.site.boutique-component',[
            'produits' => $produits,
        ]);
    }
}
