<?php

namespace App\Http\Livewire\Dashboard\Agents;

use Livewire\Component;

class AddAgentsComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.agents.add-agents-component')->layout('layouts.dash');
    }
}
