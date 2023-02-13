<?php

namespace App\Http\Livewire\Dashboard\Utilisateurs;

use Livewire\Component;

class EditUserComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.utilisateurs.edit-user-component')->layout('layouts.dash');
    }
}
