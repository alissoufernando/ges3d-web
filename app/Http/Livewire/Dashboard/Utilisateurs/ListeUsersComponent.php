<?php

namespace App\Http\Livewire\Dashboard\Utilisateurs;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class ListeUsersComponent extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public function render()
    {
        // dd(Auth::user()->id);

        $users = User::where('isDelete', 0)->orderBy('created_at','DESC')->paginate(5);

        return view('livewire.dashboard.utilisateurs.liste-users-component',[
            'users' =>$users,
        ])->layout('layouts.dash');
    }
}
