@extends('layouts.article')

@section('title', 'ブログ修正')

@section('content')
  <div class="container">
    <form method="post" action="/posts/edit">
      {{csrf_field()}}
      <input type="hidden" class="form-control" name="id" value="{{$article->id}}">
      <div class="form-group">
        <label for="titleInput">タイトル</label>
        <input type="text" class="form-control" id="titleInput" name="title" value="{{$article->title}}">
      </div>
      <div class="form-group">
        <label for="bodyInput">内容</label>
        <textarea class="form-control" id="bodyInput" rows="3" name="body">{{$article->body}}</textarea>
      </div>
      <button type="submit" class="btn btn-primary">修正</button>
    </form>
  </div>
@endsection