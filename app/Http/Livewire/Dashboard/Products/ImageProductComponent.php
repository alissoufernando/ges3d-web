<?php

namespace App\Http\Livewire\Dashboard\Products;

use Livewire\Component;

class ImageProductComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.products.image-product-component')->layout('layouts.dash');
    }
}
