<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\User;
use App\Models\Alert;
use App\Models\Article;
use App\Models\Produit;
use Livewire\Component;
use App\Models\Commande;
use App\Models\NewLetter;

class DashboardComponent extends Component
{
    public function render()
    {
        $users = User::all();
        $agents = User::all();
        $articles = Article::all();
        $produits = Produit::all();
        $alerts = Alert::all();
        $commandes = Commande::all();
        $newletters = NewLetter::all();
        return view('livewire.dashboard.dashboard-component',[
            'users' => $users,
            'articles' => $articles,
            'produits' => $produits,
            'alerts' => $alerts,
            'commandes' => $commandes,
            'newletters' => $newletters,
            'agents' => $agents,
        ])->layout('layouts.dash');
    }
}
