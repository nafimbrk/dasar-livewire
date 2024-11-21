<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Component;

class Contents extends Component
{
    public $count = 4;

    public function render()
    {
        $articles = Article::take($this->count)->get();
        $total_articles = Article::count();
        return view('livewire.contents', [
            'articles' => $articles,
            'total_articles' => $total_articles
        ]);
    }

    public function loadmore()
    {
        $this->count += 4;
        sleep(2);
    }
}
