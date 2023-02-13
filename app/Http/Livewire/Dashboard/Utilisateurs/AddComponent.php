<?php

namespace App\Http\Livewire\Dashboard\Utilisateurs;

use Livewire\Component;

class AddComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.utilisateurs.add-component')->layout('layouts.dash');
    }
}
