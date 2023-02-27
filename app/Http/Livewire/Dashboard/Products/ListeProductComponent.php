<?php

namespace App\Http\Livewire\Dashboard\Products;

use App\Models\Produit;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ListeProductComponent extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $path;
    public $nom;
    public $coute_decription;
    public $description;
    public $prix;
    public $promo_prix;
    public $user_id;
    public $produit_id;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['path', 'coute_decription', 'nom','description','prix', 'promo_prix','user_id','produit_id']);

    }


    public function saveProduit()
    {
        if ($this->produit_id) {
            $this->validate([
                'nom' =>  'required',
                'path' =>  'required',
                'coute_decription' =>  'required',
                'description' => 'required',
                'prix' => 'required',
                'promo_prix' => 'required',
                ]);
        } else {
            $this->validate([
                'nom' =>  'required',
                'path' =>  'required',
                'coute_decription' =>  'required',
                'description' => 'required',
                'prix' => 'required',
                'promo_prix' => 'required',
                ]);

        }
        // dd($this->path);


        $MyProduit = new Produit();
        if ($this->produit_id) {
            $MyProduit = Produit::findOrFail($this->produit_id);
        }

        $filenameImage = time() . '.' . $this->path->extension();
        $pathImage = $this->path->storeAs(
            'ImageProduit',
            $filenameImage,
            'public'
        );
        $MyProduit->path = $pathImage;
        $MyProduit->nom = $this->nom;
        $MyProduit->coute_decription = $this->coute_decription;
        $MyProduit->description = $this->description;
        $MyProduit->prix = $this->prix;
        $MyProduit->promo_prix = $this->promo_prix;
        if ($this->produit_id) {
            $MyProduit->user_id = $this->user_id;
        }else{
            $MyProduit->user_id = Auth::user()->id;
        }
        $MyProduit->save();

        if ($this->produit_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
       $this->resetInputFields();
       back();

    }
    public function getElementById($id)
    {


            $this->produit_id = $id;
            $MyProduit = Produit::findOrFail($this->produit_id);
            $this->path = $MyProduit->path;
            $this->nom = $MyProduit->nom;
            $this->coute_decription = $MyProduit->coute_decription;
            $this->description = $MyProduit->description;
            $this->prix = $MyProduit->prix;
            $this->promo_prix = $MyProduit->promo_prix;
            $this->user_id = $MyProduit->user_id;

    }
    public function deleteProduit($id)
    {
        $MyProduit = Produit::findOrFail($id);
        $MyProduit->isDelete = 1;
        $MyProduit->save();
        session()->flash('message', 'Enregistrement Supprimer avec succès.');
        back();

    }
    public function render()
    {
        $produits = Produit::where('isDelete', 0)->orderBy('created_at','DESC')->paginate(5);

        return view('livewire.dashboard.products.liste-product-component',[
            'produits' => $produits,
        ])->layout('layouts.dash');
    }
}
