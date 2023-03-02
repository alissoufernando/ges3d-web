<?php

namespace App\Http\Livewire\Dashboard\Alerts;

use App\Models\User;
use App\Models\Alert;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListeAlertComponent extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $alert_id;
    public $agent_id;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['alert_id', 'agent_id']);

    }


    public function afillier()
    {

        $this->validate([
            'agent_id' =>  'required',
        ]);


        // dd($this->path);



        $MyAlert = Alert::findOrFail($this->alert_id);

        $MyAlert->agent_id = $this->agent_id;
        $MyAlert->save();

        session()->flash('message', 'Modification effectuée avec succès.');
        $this->resetInputFields();
        back();

    }
    public function getElementById($id)
    {
        $this->alert_id = $id;
        // $MyAlert = Alert::findOrFail($this->alert_id);
        // $this->agent_id = $MyAlert->agent_id;
    }

    public function deleteAlert($id)
    {
        $MyAlert = Alert::findOrFail($id);
        $MyAlert->isDelete = 1;
        $MyAlert->save();
        session()->flash('message', 'Enregistrement Supprimer avec succès.');
        back();

    }
    public function valideAlert($id)
    {
        $MyAlert = Alert::findOrFail($id);
        $MyAlert->valide = 1;
        $MyAlert->save();
        session()->flash('message', 'Alert validé avec succès.');
        back();

    }

    public function render()
    {
        $alerts = Alert::where('isDelete', 0)->orderBy('created_at','DESC')->paginate(5);
        $agents = User::where('isDelete', 0)->orderBy('created_at','DESC')->get();

        return view('livewire.dashboard.alerts.liste-alert-component',[
            'alerts' => $alerts,
            'agents' => $agents,
        ])->layout('layouts.dash');
    }
}
