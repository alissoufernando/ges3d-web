<?php

namespace App\Http\Livewire\Site;

use App\Models\Alert;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AlertComponent extends Component
{
    use WithFileUploads;
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
        if(!Auth::check())
        {
            return redirect()->route('login');
        }
        return view('livewire.site.alert-component');
    }
}
