<?php

namespace App\Http\Livewire\Dashboard\Alerts;

use App\Models\Alert;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListeAlertComponent extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        $alerts = Alert::where('isDelete', 0)->orderBy('created_at','DESC')->paginate(5);

        return view('livewire.dashboard.alerts.liste-alert-component',[
            'alerts' => $alerts,
        ])->layout('layouts.dash');
    }
}
