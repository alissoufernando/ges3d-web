<?php

namespace App\Http\Livewire\Dashboard\Agents;

use App\Models\User;
use App\Models\Ville;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListeAgentsComponent extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $ville_id;
    public $agent_id;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['ville_id', 'agent_id']);

    }
    public function assignerVille()
    {

        $this->validate([
            'ville_id' =>  'required',
        ]);

        $MyAgent = User::findOrFail($this->agent_id);
        $MyAgent->ville_id = $this->ville_id;
        $MyAgent->save();

        session()->flash('message', 'Modification effectuée avec succès.');
        $this->resetInputFields();
        back();

    }
    public function getElementById($id)
    {
        $this->agent_id = $id;
        // $MyAgent = User::findOrFail($this->agent_id);
        // $this->agent_id = $MyAgent->id;
    }
    public function deleteAgent($id)
    {
        $MyAgent = User::findOrFail($id);
        $MyAgent->isDelete = 1;
        $MyAgent->save();
        session()->flash('message', 'Enregistrement Supprimer avec succès.');
        back();

    }
    public function render()
    {
        $agents = User::where('isDelete', 0)->orderBy('created_at','DESC')->with('villeAssigner')->get();
        $villes = Ville::where('isDelete', 0)->orderBy('created_at','DESC')->get();
        // foreach($agents as $agent)
        // {
        //     dd($agent->villeAssigner);
        // }

        return view('livewire.dashboard.agents.liste-agents-component',[
            'agents' => $agents,
            'villes' => $villes,
        ])->layout('layouts.dash');
    }
}
