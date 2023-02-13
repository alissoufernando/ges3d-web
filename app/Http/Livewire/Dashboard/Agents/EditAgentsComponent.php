<?php

namespace App\Http\Livewire\Dashboard\Agents;

use Livewire\Component;

class EditAgentsComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.agents.edit-agents-component')->layout('layouts.dash');
    }
}
