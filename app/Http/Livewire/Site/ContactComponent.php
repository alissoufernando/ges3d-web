<?php

namespace App\Http\Livewire\Site;

use App\Models\Contact;
use App\Models\NewLetter;
use Livewire\Component;

class ContactComponent extends Component
{
    public $email;
    public $emailNewletter;
    public $nom;
    public $message;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['nom', 'email','message','emailNewletter']);

    }


    public function saveContact()
    {
        $this->validate([
            'nom' =>  'required',
            'email' =>  'required',
            'message' => 'required',
            ]);
        // dd($this->path);
        $MyContact = new Contact();

        $MyContact->nom = $this->nom;
        $MyContact->email = $this->email;
        $MyContact->message = $this->message;
        $MyContact->save();


        session()->flash('message', 'Enregistrement effectué avec succès.');

       $this->resetInputFields();
       back();

    }
    public function saveNewLetter()
    {
        $this->validate([
            'emailNewletter' =>  'required',
            ]);
        $MyNewLetter = new NewLetter();
        $MyNewLetter->email = $this->emailNewletter;
        $MyNewLetter->save();


        session()->flash('messageN', 'Enregistrement effectué avec succès.');

       $this->resetInputFields();
       back();

    }
    public function render()
    {
        return view('livewire.site.contact-component');
    }
}
