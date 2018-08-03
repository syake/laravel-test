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

    public function edit(Request $request, $id)
    {
        $article = Article::find($id);
        return view('article.edit', ['article' => $article]);
    }
 
    public function update(Request $request)
    {
        $article = Article::find($request->id);
        $article->title = $request->title;
        $article->body = $request->body;
        $article->save();

        $request->session()->flash('message', '記事「' . $article->title . '」を更新しました');
        $request->session()->flash('article_id', $article->id);
 
        return redirect()->route('index');
    }
}
