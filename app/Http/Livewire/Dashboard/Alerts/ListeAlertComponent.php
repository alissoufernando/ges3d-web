<?php

namespace App\Http\Livewire\Dashboard\Alerts;

use Livewire\Component;

class ListeAlertComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.alerts.liste-alert-component')->layout('layouts.dash');
    }
}
