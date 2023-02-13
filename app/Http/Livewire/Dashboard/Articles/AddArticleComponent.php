<?php

namespace App\Http\Livewire\Dashboard\Articles;

use Livewire\Component;

class AddArticleComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.articles.add-article-component')->layout('layouts.dash');
    }
}
