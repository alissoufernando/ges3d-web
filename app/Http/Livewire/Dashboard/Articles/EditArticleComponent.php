<?php

namespace App\Http\Livewire\Dashboard\Articles;

use Livewire\Component;

class EditArticleComponent extends Component
{
    public function render()
    {
        return view('livewire.dashboard.articles.edit-article-component')->layout('layouts.dash');
    }
}
