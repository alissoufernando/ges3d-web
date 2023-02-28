<?php

namespace App\Http\Livewire\Site;

use App\Models\Article;
use App\Models\Contact;
use Livewire\Component;
use App\Models\cartItem;
use App\Models\NewLetter;
use Illuminate\Support\Facades\Auth;

class WelcomeComponent extends Component
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
        $articles = Article::where('isDelete', 0)->orderBy('created_at','DESC')->limit(3)->get();

        // if(!Auth::check())
        // {
        //     $cartItems = null;
        // }else{
        //     $user = Auth::user();
        //     $cartItems = cartItem::where('user_id', $user->id)->get();
        // }


        return view('livewire.site.welcome-component',[
            'articles' => $articles,
            // 'cartItems' => $cartItems,
        ]);
    }
}
