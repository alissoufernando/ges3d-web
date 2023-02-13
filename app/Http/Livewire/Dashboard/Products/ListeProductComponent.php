<?php

namespace App\Http\Livewire\Dashboard\Products;

use Livewire\Component;

class ListeProductComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.products.liste-product-component')->layout('layouts.dash');
    }
}
