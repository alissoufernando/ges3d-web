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
    public $array_full=[];



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

        $this->uploadOne();
        // array_push($this->array_full,$filenamePDF);
        // dd($this->array_full);
        $MyAlert->path = collect($this->array_full)->implode(',');
        $MyAlert->user_id = Auth::user()->id;
        $MyAlert->geo_location = $this->geo_location;
        $MyAlert->message = $this->message;
        $MyAlert->save();


        session()->flash('message', 'Enregistrement effectué avec succès.');

       $this->resetInputFields();
       back();

    }
    public function uploadOne()
    {
        if (!empty($this->path)) {
            $array_full = array();
            foreach ($this->path as $full){
                $images = $full;
                $imageName = uniqid() . '.' . $images->extension();
                $images->storeAs(
                    'ImageAlert',
                    $imageName,
                    'public'
                );

                array_push($array_full, $imageName);

            }
            $this->array_full=$array_full;

        }
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
