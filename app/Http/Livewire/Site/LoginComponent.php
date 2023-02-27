<?php

namespace App\Http\Livewire\Site;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginComponent extends Component
{
    public $nom;
    public $email;
    public $phone;
    public $ville;
    public $prenoms;
    public $password;

    public function login()
    {

        $this->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => 'required',
        ]);



        if(Auth::attempt(['email' => $this->email, 'password' => $this->password]))
        {
            $data = Auth::user();
            $token = $data->createToken('user')->plainTextToken;
            dd($data);
            return $token;
        }


    }
    public function render()
    {
        return view('livewire.site.login-component');
    }
}
