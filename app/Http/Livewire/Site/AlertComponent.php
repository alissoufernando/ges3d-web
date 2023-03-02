<?php

namespace App\Http\Livewire\Site;

use App\Models\Alert;
use App\Models\Ville;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class AlertComponent extends Component
{
    use WithFileUploads;
    public $path;
    public $user_id;
    public $ville_id;
    public $message;
    public $article_id;
    public $array_full=[];

    public $latitude;
    public $longitude;


    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['path', 'ville_id', 'user_id','message','latitude','longitude']);

    }


    public function saveAlert()
    {
        $this->validate([
            'path' =>  'required',
            'ville_id' =>  'required',
            'message' => 'required',
            'longitude' => 'required',
            'latitude' => 'required',
            ]);
        // dd($this->path);


        $MyAlert = new Alert();

        $this->uploadOne();
        // array_push($this->array_full,$filenamePDF);
        // dd($this->array_full);
        $MyAlert->path = collect($this->array_full)->implode(',');
        $MyAlert->user_id = Auth::user()->id;
        $MyAlert->longitude = $this->longitude;
        $MyAlert->latitude = $this->latitude;
        $MyAlert->ville_id = $this->ville_id;
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
        $villes = Ville::where('isDelete', 0)->orderBy('created_at','DESC')->get();

        return view('livewire.site.alert-component',[
            'villes' => $villes,
        ]);
    }
}
