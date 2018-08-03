<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{   
    public function index()
    {
        $articles = Article::all();
        return view('article.index', ['articles' => $articles]);
    }

    public function add()
    {
        return view('article.add');
    }
  
    public function store(Request $request)
    {
        $article = new Article;
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();
  
        return view('article.store');
    }
}
