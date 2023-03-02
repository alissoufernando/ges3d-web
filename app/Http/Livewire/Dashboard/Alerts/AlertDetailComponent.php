<?php

namespace App\Http\Livewire\Dashboard\Alerts;

use App\Models\Alert;
use Livewire\Component;

class AlertDetailComponent extends Component
{
    public $alert_id;
    public function mount($id){
        $this->alert_id = $id;

    }
    public function render()
    {
        $alert = Alert::where('isDelete', 0)->where('id', $this->alert_id)->first();

        return view('livewire.dashboard.alerts.alert-detail-component',[
            'alert' => $alert,
        ])->layout('layouts.dash');
    }
}
