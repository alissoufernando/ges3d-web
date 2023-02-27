<?php

namespace App\Http\Livewire\Dashboard\Agents;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListeAgentsComponent extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $agents = User::where('isDelete', 0)->orderBy('created_at','DESC')->paginate(5);

        return view('livewire.dashboard.agents.liste-agents-component',[
            'agents' => $agents,
        ])->layout('layouts.dash');
    }
}
