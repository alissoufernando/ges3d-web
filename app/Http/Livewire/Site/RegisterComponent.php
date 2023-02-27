<?php

namespace App\Http\Livewire\Site;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterComponent extends Component
{
    public $nom;
    public $email;
    public $phone;
    public $ville;
    public $prenoms;
    public $password;

    public function register(){
        $this->validate([
            'nom' => ['required', 'string', 'max:255'],
            'prenoms' => ['required', 'string', 'max:255'],
            'ville' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['required', 'numeric'],
            'password' => 'required',
        ]);
        // dd('ok');

        $user = User::create([
            'nom' => $this->nom,
            'prenoms' => $this->prenoms,
            'email' => $this->email,
            'phone' => $this->phone,
            'ville' => $this->ville,
            'password' => Hash::make($this->password),
        ]);
        $userRole = Role::where('name' ,'Utilisateur')->first();
        $user->roles()->attach($userRole);
        $token = $user->createToken('auth-token')->plainTextToken;
        // $user

        return $user;
    }
    public function render()
    {
        // dd(Auth::user());
        return view('livewire.site.register-component');
    }
}
