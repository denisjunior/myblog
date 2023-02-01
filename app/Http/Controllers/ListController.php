<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListController extends Controller
{
    public function index()
    {
        $articles = Article::paginate(6);
        return view('articles.listeArticle', [
            'articles' => $articles
        ]);
    }
}
