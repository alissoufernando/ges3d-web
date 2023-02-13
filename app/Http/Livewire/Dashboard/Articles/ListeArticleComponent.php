<?php

namespace App\Http\Livewire\Dashboard\Articles;

use Livewire\Component;

class ListeArticleComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.articles.liste-article-component')->layout('layouts.dash');
    }
}
