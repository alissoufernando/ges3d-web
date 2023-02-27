<?php

namespace App\Http\Livewire\Dashboard\Articles;

use App\Models\Article;
use Livewire\Component;
use Livewire\WithFileUploads;

class ListeArticleComponent extends Component
{
    use WithFileUploads;
    protected $paginationTheme = 'bootstrap';
    public $path;
    public $titre;
    public $contenu;
    public $description;
    public $article_id;

    public function resetInputFields()
    {
        // Clean errors if were visible before
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset(['path', 'contenu', 'titre','description']);

    }


    public function saveArticle()
    {
        if ($this->article_id) {
            $this->validate([
                'titre' =>  'required',
                'path' =>  'required',
                'contenu' =>  'required',
                'description' => 'required',
                ]);
        } else {
            $this->validate([
                'titre' =>  'required',
                'path' =>  'required',
                'contenu' =>  'required',
                'description' => 'required',
                ]);

        }
        // dd($this->path);


        $MyArticle = new Article();
        if ($this->article_id) {
            $MyArticle = Article::findOrFail($this->article_id);
        }

        $filenameImage = time() . '.' . $this->path->extension();
        $pathImage = $this->path->storeAs(
            'ImageArticle',
            $filenameImage,
            'public'
        );
        $MyArticle->path = $pathImage;
        $MyArticle->titre = $this->titre;
        $MyArticle->contenu = $this->contenu;
        $MyArticle->description = $this->description;
        $MyArticle->save();

        if ($this->article_id) {
            session()->flash('message', 'Modification effectuée avec succès.');
        } else {
            session()->flash('message', 'Enregistrement effectué avec succès.');
        }
       $this->resetInputFields();
       back();

    }
    public function getElementById($id)
    {


            $this->article_id = $id;
            $MyArticle = Article::findOrFail($this->article_id);
            $this->path = $MyArticle->path;
            $this->titre = $MyArticle->titre;
            $this->contenu = $MyArticle->contenu;
            $this->description = $MyArticle->description;

    }
    public function deleteArticle($id)
    {
        $MyArticle = Article::findOrFail($id);
        $MyArticle->isDelete = 1;
        $MyArticle->save();
        session()->flash('message', 'Enregistrement Supprimer avec succès.');
        back();

    }
    public function render()
    {
        $articles = Article::where('isDelete', 0)->orderBy('created_at','DESC')->paginate(5);
        return view('livewire.dashboard.articles.liste-article-component',[
            'articles' => $articles,
        ])->layout('layouts.dash');
    }
}
