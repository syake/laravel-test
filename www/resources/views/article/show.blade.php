@extends('layouts.app')

@section('title', 'ブログ削除')

@section('content')
  <div class="container">
    <form method="post" action="/posts/delete">
      {{csrf_field()}}
      <input type="hidden" class="form-control" name="id" value="{{$article->id}}">
      <div class="form-group">
        <label for="titleInput">タイトル</label>
        <input type="text" readonly class="form-control" id="titleInput" name="title" value="{{$article->title}}">
      </div>
      <div class="form-group">
        <label for="bodyInput">内容</label>
        <textarea readonly class="form-control" id="bodyInput" rows="3" name="body">{{$article->body}}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">削除</button>
    </form>
  </div>
@endsection