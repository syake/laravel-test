<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{   
	/**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $articles = Article::orderBy('id', 'desc')->get();
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

        $request->session()->flash('message', '記事「' . $article->title . '」を登録しました');
        $request->session()->flash('article_id', $article->id);
  
        return redirect()->route('index');
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

    public function show(Request $request, $id)
    {
        $article = Article::find($id);
        return view('article.show', ['article' => $article]);
    }
 
    public function delete(Request $request)
    {
        $article = Article::find($request->id);
        Article::destroy($request->id);

        $request->session()->flash('message', '記事「' . $article->title . '」を削除しました');
        return redirect()->route('index');
    }
}
