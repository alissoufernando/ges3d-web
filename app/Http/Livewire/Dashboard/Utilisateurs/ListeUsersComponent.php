<?php

namespace App\Http\Livewire\Dashboard\Utilisateurs;

use Livewire\Component;

class ListeUsersComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.utilisateurs.liste-users-component')->layout('layouts.dash');
    }
}
