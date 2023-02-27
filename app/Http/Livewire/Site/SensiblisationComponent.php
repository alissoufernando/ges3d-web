<?php

namespace App\Http\Livewire\Site;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithPagination;

class SensiblisationComponent extends Component
{
    protected $paginationTheme = 'bootstrap';
    use WithPagination;
    public function render()
    {
        $articles = Article::where('isDelete', 0)->orderBy('created_at','DESC')->paginate(6);

        return view('livewire.site.sensiblisation-component',[
            'articles' => $articles,
        ]);
    }
}
