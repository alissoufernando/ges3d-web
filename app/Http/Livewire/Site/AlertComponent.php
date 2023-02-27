<?php

namespace App\Http\Livewire\Site;

use App\Models\Alert;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class AlertComponent extends Component
{
    public $path;
    public $user_id;
    public $geo_location;
    public $message;
    public $article_id;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['path', 'geo_location', 'user_id','message']);

    }


    public function saveAlert()
    {
        $this->validate([
            'user_id' =>  'required',
            'path' =>  'required',
            'geo_location' =>  'required',
            'message' => 'required',
            ]);
        // dd($this->path);


        $MyAlert = new Alert();

        $filenameImage = time() . '.' . $this->path->extension();
        $pathImage = $this->path->storeAs(
            'ImageAlert',
            $filenameImage,
            'public'
        );
        $MyAlert->path = $pathImage;
        $MyAlert->user_id = Auth::user()->id;
        $MyAlert->geo_location = $this->geo_location;
        $MyAlert->message = $this->message;
        $MyAlert->save();


        session()->flash('message', 'Enregistrement effectué avec succès.');

       $this->resetInputFields();
       back();

    }
    public function render()
    {
        return view('livewire.site.alert-component');
    }
}
