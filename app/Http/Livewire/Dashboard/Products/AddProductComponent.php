<?php

namespace App\Http\Livewire\Dashboard\Products;

use Livewire\Component;

class AddProductComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.products.add-product-component')->layout('layouts.dash');
    }
}
