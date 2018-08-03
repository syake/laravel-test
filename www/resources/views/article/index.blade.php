@extends('layouts.article')

@section('title', 'ブログ一覧')

@section('content')
  <div class="container">
    @if (Session::has('message'))
    <div class="alert alert-success" role="alert">
      {{session('message')}}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <p><a href="/posts/add" class="btn btn-primary">新規追加</a></p>
    
    @foreach ($articles as $article)
    @if ($article->id == session('article_id'))
    <div class="card mb-2 font-weight-bold border-success">
    @else
    <div class="card mb-2">
    @endif
      <div class="card-body">
        <h4 class="card-title">{{$article->title}}</h4>
        <h6 class="card-subtitle mb-2 text-muted">{{$article->updated_at}}</h6>
        <p class="card-text">{{$article->body}}</p>
        <a href="/posts/edit/{{$article->id}}" class="card-link">修正</a>
        <a href="/posts/delete/{{$article->id}}" class="card-link">削除</a>
      </div>
    </div>
    @endforeach
  </div>
@endsection