<?php

namespace App\Http\Livewire\Dashboard\Products;

use Livewire\Component;

class EditProductComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.products.edit-product-component')->layout('layouts.dash');
    }
}
