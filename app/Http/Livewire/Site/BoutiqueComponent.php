<?php

namespace App\Http\Livewire\Site;

use App\Models\Produit;
use App\Models\ProduitPanier;
use Livewire\Component;
use Livewire\WithPagination;

class BoutiqueComponent extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;

    public function panier($id,$nom,$prix)
    {
        $MyProduitPanier = new ProduitPanier();
        $MyProduitPanier->produit_id = $id;
        $MyProduitPanier->nome = $nom;
        $MyProduitPanier->prix = $prix;
        $MyProduitPanier->quantite = 1;
        $MyProduitPanier->save();

        session()->flash('message', 'Un produit à été ajouter au panier.');
        back();
    }

    public function render()
    {
        $produits = Produit::where('isDelete', 0)->orderBy('created_at','DESC')->paginate(6);

        return view('livewire.site.boutique-component',[
            'produits' => $produits,
        ]);
    }
}
