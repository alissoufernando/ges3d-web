<?php

namespace App\Http\Livewire\Dashboard\Agents;

use Livewire\Component;

class ListeAgentsComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.agents.liste-agents-component')->layout('layouts.dash');
    }
}
