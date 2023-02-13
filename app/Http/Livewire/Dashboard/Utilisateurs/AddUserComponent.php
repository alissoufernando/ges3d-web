<?php

namespace App\Http\Livewire\Dashboard\Utilisateurs;

use Livewire\Component;

class AddUserComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.utilisateurs.add-user-component')->layout('layouts.dash');
    }
}
